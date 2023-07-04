<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('data.json');
    $dataArray = json_decode($data, true);

    if (isset($_POST['updateItem'])) {
        $editIndex = $_POST['editIndex'];

        $dataArray[$editIndex] = [
            'title' => $_POST['editTitle'],
            'jobType' => $_POST['editJobType'],
            'description' => $_POST['editDescription'],
            'updatedAgo' => '[' . date('Y-m-d H:i:s') . ']',
            'overview' => $_POST['editOverview'],
            'vacancies' => $_POST['editVacancies'],
            'experience' => $_POST['editExperience'],
            'jobLevel' => $_POST['editJobLevel'],
            'location' => $_POST['editLocation'],
            'additionalInfo' => $_POST['editAdditionalInfo']
        ];
    } elseif (isset($_POST['deleteItem'])) {
        $deleteIndex = $_POST['editIndex'];
        unset($dataArray[$deleteIndex]);
        $dataArray = array_values($dataArray);
    } elseif (isset($_POST['addItem'])) {
        $newItem = [
            'title' => $_POST['addTitle'],
            'jobType' => $_POST['addJobType'],
            'description' => $_POST['addDescription'],
            'updatedAgo' => '[' . date('Y-m-d H:i:s') . ']',
            'overview' => $_POST['addOverview'],
            'vacancies' => $_POST['addVacancies'],
            'experience' => $_POST['addExperience'],
            'jobLevel' => $_POST['addJobLevel'],
            'location' => $_POST['addLocation'],
            'additionalInfo' => $_POST['addAdditionalInfo']
        ];
        $dataArray[] = $newItem;
    }

    $jsonData = json_encode($dataArray, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $jsonData);

    header('Location: index.php');
    exit();
}
?>
