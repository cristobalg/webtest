<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

</head>
<body>
<div class="container">
    <div class="row layout2">
        <div class="col">
            <div class="row">
                <div class="col-12">
                    <div class="row" >
                        <?php echo '<img src="' . $abspath . '/assets/logo.png">'; ?>
                    </div>
                    <div class="row menu">
                        <ul class="nav">
                        <?php foreach ($menu as $m) {
                            echo '<li class="nav-item">';
                            echo '<a class="nav-link menufont" href="' . $m['url'] . '">' . $m['name'] . '</a>';
                            echo '</li>';
                        } ?>
                        </ul>
                    </div>
                    <div class="row">
                        <?php echo '<img src="' . $abspath . '/assets/slider.png" class="img-fluid">'; ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 courses">
                            <h3>Available courses</h3>
                            <div class="row">
                                <div class="col-8">
                                    <div class="row courseslist">
                                    <?php foreach ($courses as $c) {
                                        echo "<div class='col-4'>";
                                        echo '<img src="' . $abspath . '/assets/course.png" class="img-fluid">';
                                        echo '<h4 coursetitle>' . $c['name']. '</h4>' . '<p>' . $c['desc'] . "</p></div>";
                                    } ?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row">
                                        <?php echo '<img src="' . $abspath . '/assets/learnmore.png" class="img-fluid">'; ?>
                                    </div>
                                    <div class="row">
                                        <?php echo '<img src="' . $abspath . '/assets/learnmore2.png" class="img-fluid">'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row footer">
        <div class="col-12">
            <?php echo '<img align="right" src="' . $abspath . '/assets/logofooter.png" class="img-fluid">'; ?>
        </div>
    </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>