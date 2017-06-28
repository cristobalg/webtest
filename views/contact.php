<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $abspath ?>/assets/style.css">
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
                            echo '<a class="nav-link menufont" href="'. $abspath. $m['url'] . '">' . $m['name'] . '</a>';
                            echo '</li>';
                        } ?>
                        </ul>
                    </div>
                    <div class="row">
                        <?php echo '<img src="' . $abspath . '/assets/slider.png" class="img-fluid">'; ?>
                    </div>
                </div>
            </div>

            <div class="row contactform">
                <div class="col-12">
                    <form id="contactform" data-parsley-validate="" action="<?php echo $abspath ?>/index.php/addcontact" method="post">
                        <div class="form-group row">
                            <label for="name-input" class="col-2 col-form-label">Name</label>
                            <div class="col-10">
                                <input class="form-control" required="" type="text" value="Your name" name="name" id="name-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-10">
                                <input class="form-control" type="email" data-parsley-trigger="change" required="" value="bootstrap@example.com" name="email" id="email-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject-input" class="col-2 col-form-label">Subject</label>
                            <div class="col-10">
                                <input class="form-control" required="" type="text" value="Subject" name ="subject" id="subject-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="comment-input" class="col-2 col-form-label">Comment</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="Comment" name="comment" id="comment-input">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.7.2/parsley.js"></script>
<script>
    $(function () {
        $('#contactform').parsley();
    });
</script>
</body>
</html>