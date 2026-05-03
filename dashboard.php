<?php
include_once "./layouts/dash_header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="./controller/banner_link.php">
                <label for="free"> Available for - </label>
                <input name="free" id="free" type="text" placeholder="Available for Freelance">

                <label for="tag">? Architect</label>
                <input type="text" name="tag" id="tag" placeholder="Laravel Architect">

                <label for="resume">Change Resume</label>
                <input type="file" name="resume" id="resume" accept=".pdf">

                <label for="image">Change Banner Image</label>
                <input type="file" name="image" id="image" accept="image/*">
            </form>


<?php
include_once "./layouts/dash_footer.php";