<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">


        <!-- script for post -->
        <?php
        require_once 'init.php';
    
        if(isset($_POST['submit'])) {
            
            
            
            $linkData = [
                'link' => $_POST['url'],
                'message' => $_POST['msg'],
                ];
            
            // die(var_dump($linkData));

            try {
                // Returns a `Facebook\FacebookResponse` object
                // $response = $fb->post('/me/feed', $linkData, '{access-token}');
                $response = $fb->post('/me/feed', $linkData, $_SESSION['fb_access']);
            } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
            } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
            }
            $graphNode = $response->getGraphNode();
            echo 'Posted with id: ' . $graphNode['id'];
        }
    ?>



        <h1>post link on facebook using graph API v2.10 with PHP</h1>
        <form class="form-horizontal" method="post">
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputLarge">URL : </label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="url" name="url" value="http://localhost/facebook/">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="formGroupInputSmall">Message : </label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" id="msg" name="msg" placeholder="post on facebook">
                </div>
            </div>
            <div class="form-group form-group-lg">
            <label class="col-sm-2 control-label" for="formGroupInputSmall"></label>     
               <div class="col-sm-4">
                  <input type="submit" class="btn btn-success" value="submit" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>

</html>