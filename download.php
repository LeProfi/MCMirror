<?php
$title = "Download";
require("templates/header.php");
?>
<div class="container">
    <h1>Download</h1>
    <hr>
    <form action="api/v1/downloadVersion.php" method="GET">
        <div class="mb-3">
            <label for="fork" class="form-label">Fork:</label>
            <select class="form-select" name="fork" id="fork">
                <option selected>Paper</option>
            </select>
            <div class="form-text">We are planning on adding more forks.</div>
        </div>

        <div class="mb-3">
            <label for="version" class="form-label">Version:</label>
            <select class="form-select" name="version" id="version">
                <option selected>1.18.2</option>
                <option>1.18.1</option>
                <option>1.18</option>
                <option>1.17.1</option>
                <option>1.17</option>
                <option>1.16.5</option>
                <option>1.16.4</option>
                <option>1.16.3</option>
                <option>1.16.2</option>
                <option>1.16.1</option>
                <option>1.16</option>
                <option>1.15.2</option>
                <option>1.15.1</option>
                <option>1.15</option>
                <option>1.14.4</option>
                <option>1.14.3</option>
                <option>1.14.2</option>
                <option>1.14.1</option>
                <option>1.14</option>
                <option>1.13.2</option>
                <option>1.13.1</option>
                <option>1.13</option>
                <option>1.12.2</option>
                <option>1.12.1</option>
                <option>1.12</option>
                <option>1.11.2</option>
                <option>1.10.2</option>
                <option>1.9.4</option>
                <option>1.8.8</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Download</button>
    </form>
</div>
<?php
require("templates/footer.php");
?>