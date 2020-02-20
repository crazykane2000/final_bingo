 <?php session_start();
    include '../administrator/administrator/connection.php';
    include '../administrator/administrator/function.php';
    $pdo = new PDO($dsn, $user, $pass, $opt); 
    $pdo_auth = authenticate_backoffice();
?>
<!doctype html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>View All Business Partners | Bingo</title>
      <meta name="description" content="Bingo">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Google Font -->
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

      <!-- Favicon -->
      <link rel="apple-touch-icon" href="apple-touch-icon.png">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

      <!-- Stylesheet -->
      <link rel="stylesheet" href="../administrator/css/neat.minc619.css?v=1.0">
      <style type="text/css">
        .tabler {
          font-family: 'Poppins',Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
          font-size: 13px;
          color: #888
        }

        .tabler td, .tabler th {
          border: 1px solid #f5f5f5;
          padding: 11px;
        }

        .tabler tr:nth-child(even){background-color: #fafafa;}

        .tabler tr:hover {background-color: #f4f4f4;}

        .tabler th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #f5f5f5;
          color: #333;
        }

        .badge {
          display: inline-block;
          padding: .25em .4em;
          font-size: 75%;
          font-weight: 700;
          line-height: 1;
          text-align: center;
          white-space: nowrap;
          vertical-align: baseline;
          border-radius: .25rem;
          transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
        </style>
    </head>
    <body>

      <div class="o-page">
       <?php include 'header.php'; ?>
        <div class="container-fluid" style="padding-left:40px;">
          <div class="row">
            <div class="col-lg-12 col-md-12 ">
              <h4>View all Business Partners (<?php echo $pdo_auth['country']; ?>)</h4>
              <p class="u-mb-small">Administrator Sections</p>
              <div class="">
               
                
                <div class="c-card" style="min-height:800px">
                   <h4>Business Partners</h4>
                   <hr style="margin: 10px 0px;opacity: .2" />

                   <?php see_status($_REQUEST); ?>
                   <div style="padding: 10px;"></div>
                   <table class="tabler">
                     <thead>
                       <th>S.No.</th>
                       <th>Name</th>
                       <th>Partner Type</th>
                       <th>Status</th>
                       <th>Country</th>
                       <th>Completed Association</th>
                       <th>Pending Association</th>
                       <th>CL Issued</th>
                       <th>CL Pending</th>
                       <th>CLS utilization</th>
                       <th>Order with Open Balance</th>
                       <th>Action</th>
                     </thead>

                     <tbody>

                      <?php 
                        $i=1;
                        try {
                              $stmt = $pdo->prepare('SELECT * FROM `business_partners` ORDER BY creation_date DESC');
                                  //echo 'SELECT * FROM franchisie_details WHERE email = :user';
                              } catch(PDOException $ex) {
                                  echo "An Error occured!"; 
                                  print_r($ex->getMessage());
                              }
                              $stmt->execute();
                              $user = $stmt->fetchAll();

                              foreach ($user as $key => $value) {
                                $ratay = '<label class="badge" style="background-color: #03a9f4;color:#fff;padding: 5px;">Wholesaler</label>';
                                if ($value['partner_type']!="Wholesaler") {
                                  $ratay = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">FIE Bank</label>';
                                }
                                $rand1 = rand(100000,900000);
                                $rand2 = rand(100000,700000);
                               // print_r($value);

                                $btns = '<a href="approve_kyc.php?id='.$value['id'].'" class="c-btn c-btn--small c-btn--success ">Update KYC</a>';
                                $status = '<label class="badge" style="background-color: orange;color:#fff;padding: 5px;">Pending</label>';
                                if ($value['status']=="Approved") {
                                  $status = '<label class="badge" style="background-color: green;color:#fff;padding: 5px;">Approved</label>';
                                  $btns = '<a href="mailto:?subject=I wanted you to see this site&amp;body=Your Username : '.$value['email'].'%0D%0A Password is : '.$value['pass'].' %0D%0A Please Login Via Bingo Business Partner Panel. %0D%0A%0D%0A"   title="Share by Email" class="c-btn c-btn--small c-btn--info">Share Details</a><br/> <a href="approve_kyc.php?id='.$value['id'].'" style="Font-size:10px;" >Update Again</a>';
                                }

                                if ($value['country']!=$pdo_auth['country']) {
                                  continue;
                                }

                               // print_r($value);
                                echo '<tr>
                                       <td>'.$i.'.</td>
                                       <td data-id="'.$value['id'].'"  style="font-weight: bold;color:#333;cursor:pointer" class="tango" data-toggle="modal" data-target="#modal1">'.$ratay.'<br/><b>'.$value['name'].'</b><br/>
                                        Tx : <span style="color:#888;font-size:12px;">'.$value['country'].'</span>
                                       </td>
                                       <td >'.$value['business_type'].'</td>
                                       <td>'.$status.'</td>
                                       <td >'.$value['address'].'</td>
                                       <td>0</td>
                                       <td>0</td>
                                       <td>USD 0</td>
                                       <td>USD 0</td>
                                       <td>USD 0</td>
                                       <td>USD 0</td>
                                       <td>'.$btns.'</td>
                                     </tr>';
                                     $i++;
                              }
                       ?>
                       <div class="c-modal modal fade " id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" >
                          <div class="c-modal__dialog modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="c-card u-p-medium u-mh-auto" style="max-width:500px;">
                                      <h5>Business Partner Details Are : </h5>
                                      <div style="padding: 4px;"></div>
                                      <div><hr style="opacity: .4" /></div>
                                      <div style="padding: 6px;"></div>
                                      <div id="dosa"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                     </tbody>
                   </table>

                   <div style="padding: 10px;"></div>

                  
                </div>
              </div>
            </div><!-- // .col-sm-6 -->

            
          </div>


          <?php include 'footer.php'; ?>
        </div>
      </div>

      <!-- Main JavaScript -->
      <script src="../administrator/js/neat.minc619.js?v=1.0"></script>
       <script type="text/javascript">
          $(document).on("click", ".tango", function () {
             var id = $(this).data('id');
             $("#dosa").load("load_bp.php", {"id":id});
        });
        </script>
     
    </body>
  </html>