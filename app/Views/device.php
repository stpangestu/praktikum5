<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Device</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="text-center">

    <div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-hotpink">
                <h2 class="navbar-brand" href="#">IoT Vrindavan</h2>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/device">Device</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com/st.pangestuu">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <h1>Existing device</h1>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">device name</th>
                        <th scope="col">device brand</th>
                        <th scope="col">device quantity</th>
                        <th scope="col">device status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sample as $item) : ?>
                        <tr>
                            <td scope="row"><?= $item['Id'] ?></td>
                            <td><?= $item['device_name'] ?></td>
                            <td><?= $item['device_brand'] ?></td>
                            <td><?= $item['device_quantity'] ?></td>
                            <td><?php
                                if ($item['device_status'] == 1) {
                                    echo "on";
                                } else {
                                    echo "off";
                                }  ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>by <a href="https://instagram.com/st.pangestuu">@st.pangestuu</a>.</p>
            </div>
        </footer>
    </div>



</body>

</html>