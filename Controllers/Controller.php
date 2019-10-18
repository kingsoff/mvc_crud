<?php

Class Controller
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function index()
    {

        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);

        switch ($page) {
            case ($page === "show"):
                $this->db->readAll('Record');
                require "views/show.php";
                break;


            case ($page === "delete_record"):
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $this->db->delete('Record', $id);
                }
                require "views/show.php";
                break;


            case ($page === "create"):
                if (isset($_POST['insert_record'])) {
                    $record = new Record();
                    $record->setName($_POST['name']);
                    $record->setBirthYear($_POST['birth_year']);
                    $record->setNationality($_POST['nationality']);
                    $insert_success_record = $this->createRecord($record);
                    header('Location: /index.php?page=show&insert_success_record=' . (bool)$insert_success_record . '&id=' . $record->getId());
                    exit();
                }
                require "views/create.php";
                break;

            case ($page === "update_record"):
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $record = $this->db->getById('Record', $id);
                    require "views/update.php";
                }
                break;

            case ($page === "do_update_record"):
                if (isset($_POST['update_record'])) {
                    $record = new Record($_POST);
                    $update_success_record = $this->updateRecord($record);
                    header('Location: /index.php?page=show&update_success_record=' . (int)$update_success_record . '&id=' . $record->getId());
                    exit();
                }
                break;

            default:
                require "views/show.php";
                break;
        }
    }


    public function updateRecord(Record $record)
    {
        return $this->db->update('Record', $record->getId(), $record->toArray());
    }


    public function createRecord(Record $record)
    {
        return $this->db->create('Record', $record->toArray());
    }

    public function success()
    {
        if (isset($_GET['insert_success_record']) && $_GET['insert_success_record']) {
            echo "<p>WOOHOO! Your record was successfully added! </p>";
        } elseif (isset($_GET['insert_success_record']) && !$_GET['insert_success_record']) {
            echo "<p>Something wrong!</p>";
        }
    }

    public function updateSuccess()
    {
        if (isset($_GET['update_success_record']) && $_GET['update_success_record']) {
            echo "<p>WOOHOO! Your record was successfully updated! </p>";
        } elseif (isset($_GET['update_success_record']) && !$_GET['update_success_record']) {
            echo "<p>Something wrong!</p>";
        }
    }
}