<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
        <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Eployee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index1.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Province</p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
        </div>
    </div>
    <div class="content-wrapper">
        <div class="p-5">
            <?php
            include "Views/" . $data['page'] . ".php";
            ?>
        </div>
    </div>
</body>

</html>