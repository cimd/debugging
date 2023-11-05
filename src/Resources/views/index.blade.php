<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Konnec Debugging</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Debugging
                </div>

                <div class="links">
                </div>
            </div>
        </div>

        <script>
            export default {
                data() {
                },
                created() {
                    console.log('test')
                }
            }
        </script>
    </body>
</html>
