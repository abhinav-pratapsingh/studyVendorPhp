<?php
session_start();

if (!isset($_SESSION["loggedin"])) {
    header("location:login.php");
    exit;
}

include './master/connection.php';
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Study Wander</title>
      <meta charset="utf-8" />
      <meta content="width=device-width, initial-scale=1.0" name="viewport" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="" />
      <meta name="MobileOptimized" content="320" />
      <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/icofont.min.css" />
      <link rel="stylesheet" href="assets/css/swiper.min.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/nice-select.css" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
      <link rel="stylesheet" id="theme-change" type="text/css" href="#" />
      <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png" />
      <style>
         .partner-table-wrap {
            overflow-x: auto;
         }
         .partner-table {
            width: 100%;
            min-width: 1080px;
         }
         .partner-table th,
         .partner-table td {
            vertical-align: top;
            white-space: normal;
         }
         .partner-photo {
            width: 84px;
            height: 84px;
            object-fit: cover;
            border-radius: 12px;
            border: 1px solid #d7dfeb;
            display: block;
            margin-bottom: 10px;
            background: #f7f9fc;
         }
         .partner-summary {
            min-width: 180px;
            line-height: 1.7;
         }
         .partner-summary p,
         .partner-detail-card p {
            margin-bottom: 6px;
         }
         .partner-label {
            font-weight: 700;
            color: #243a63;
         }
         .partner-detail-row {
            display: none;
            background: #fbfcff;
         }
         .partner-detail-wrap {
            padding: 20px 8px 10px;
         }
         .partner-detail-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
         }
         .partner-detail-card {
            background: #ffffff;
            border: 1px solid #e4ebf5;
            border-radius: 14px;
            padding: 16px;
         }
         .partner-detail-card h6 {
            margin-bottom: 12px;
            font-weight: 700;
            color: #1f3560;
         }
         .partner-empty {
            color: #8d97a8;
         }
         .partner-topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
            flex-wrap: wrap;
         }
         .partner-search {
            max-width: 280px;
            width: 100%;
         }
      </style>
   </head>
   <body>
      <div class="page-wrapper">
         <?php include("./master/navbar.php"); ?>
         <div class="page-wrapper">
            <div class="main-content">
               <div class="row">
                  <div class="col xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="page-title-wrapper">
                        <div class="page-title-box">
                           <h4 class="page-title">Partner Registrations</h4>
                        </div>
                        <div class="breadcrumb-list">
                           <ul>
                              <li class="breadcrumb-link">
                                 <a href="index.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
                              </li>
                              <li class="breadcrumb-link active">Partner Registrations</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card table-card">
                        <div class="card-header pb-0">
                           <h4>Partner Registration Data</h4>
                        </div>
                        <div class="card-body">
                           <div class="partner-topbar">
                              <div class="text-muted">Click `View Details` to expand a record below the table row.</div>
                              <input type="text" id="partnerSearch" class="form-control partner-search" placeholder="Search by name, phone, email..." />
                           </div>

                           <div class="partner-table-wrap">
                              <table class="table table-bordered partner-table" id="partnerTable">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Photo</th>
                                       <th>Name</th>
                                       <th>Profile</th>
                                       <th>Contact</th>
                                       <th>View</th>
                                       <th>Resume</th>
                                       <th>Created</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `partner_registrations` ORDER BY `id` DESC";
                                    $query = mysqli_query($con, $sql);
                                    $count = 0;

                                    if ($query && mysqli_num_rows($query) > 0) {
                                        while ($row = mysqli_fetch_assoc($query)) {
                                            $count++;
                                            $full_name = trim($row['first_name'] . ' ' . $row['last_name']);
                                            $search_blob = strtolower(
                                                $full_name . ' ' .
                                                $row['phone'] . ' ' .
                                                $row['email'] . ' ' .
                                                $row['profile_type'] . ' ' .
                                                $row['preferred_area']
                                            );
                                            ?>
                                    <tr class="partner-main-row" data-search="<?php echo htmlspecialchars($search_blob); ?>">
                                       <td><?php echo $count; ?></td>
                                       <td>
                                          <?php if (!empty($row['photo'])) { ?>
                                             <a target="_blank" href="assets/partner-photos/<?php echo urlencode($row['photo']); ?>">
                                                <img class="partner-photo" src="assets/partner-photos/<?php echo htmlspecialchars($row['photo']); ?>" alt="<?php echo htmlspecialchars($full_name); ?>">
                                             </a>
                                             <a class="btn btn-primary btn-sm" target="_blank" href="assets/partner-photos/<?php echo urlencode($row['photo']); ?>">Open</a>
                                          <?php } else { ?>
                                             <span class="partner-empty">No photo</span>
                                          <?php } ?>
                                       </td>
                                       <td>
                                          <div class="partner-summary">
                                             <p><span class="partner-label">Name:</span> <?php echo htmlspecialchars($full_name !== '' ? $full_name : 'N/A'); ?></p>
                                             <p><span class="partner-label">Gender:</span> <?php echo htmlspecialchars($row['gender'] !== '' ? $row['gender'] : 'N/A'); ?></p>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="partner-summary">
                                             <p><span class="partner-label">Profile:</span> <?php echo htmlspecialchars($row['profile_type']); ?></p>
                                             <p><span class="partner-label">Preferred Area:</span> <?php echo htmlspecialchars($row['preferred_area']); ?></p>
                                             <p><span class="partner-label">Service Area:</span> <?php echo htmlspecialchars($row['service_area'] !== '' ? $row['service_area'] : 'N/A'); ?></p>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="partner-summary">
                                             <p><span class="partner-label">Phone:</span> <?php echo htmlspecialchars($row['phone']); ?></p>
                                             <p><span class="partner-label">Alternate:</span> <?php echo htmlspecialchars($row['alternate_phone'] !== '' ? $row['alternate_phone'] : 'N/A'); ?></p>
                                             <p><span class="partner-label">Email:</span> <?php echo htmlspecialchars($row['email']); ?></p>
                                          </div>
                                       </td>
                                       <td>
                                          <button type="button" class="btn btn-info btn-sm text-white partner-toggle-btn">View Details</button>
                                       </td>
                                       <td>
                                          <?php if (!empty($row['resume'])) { ?>
                                             <a class="btn btn-secondary btn-sm" target="_blank" href="assets/partner-resumes/<?php echo urlencode($row['resume']); ?>">View Resume</a>
                                          <?php } else { ?>
                                             <span class="partner-empty">No resume</span>
                                          <?php } ?>
                                       </td>
                                       <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                    </tr>
                                    <tr class="partner-detail-row">
                                       <td colspan="8">
                                          <div class="partner-detail-wrap">
                                             <div class="partner-detail-grid">
                                                <div class="partner-detail-card">
                                                   <h6>Address</h6>
                                                   <p><span class="partner-label">Current Address:</span><br><?php echo nl2br(htmlspecialchars($row['current_address'])); ?></p>
                                                   <p><span class="partner-label">Permanent Address:</span><br><?php echo nl2br(htmlspecialchars($row['permanent_address'] !== '' ? $row['permanent_address'] : 'N/A')); ?></p>
                                                   <p><span class="partner-label">City:</span> <?php echo htmlspecialchars($row['city']); ?></p>
                                                   <p><span class="partner-label">State:</span> <?php echo htmlspecialchars($row['state']); ?></p>
                                                   <p><span class="partner-label">Pin Code:</span> <?php echo htmlspecialchars($row['pin_code']); ?></p>
                                                </div>
                                                <div class="partner-detail-card">
                                                   <h6>Academic Details</h6>
                                                   <p><span class="partner-label">Qualification:</span> <?php echo htmlspecialchars($row['qualification']); ?></p>
                                                   <p><span class="partner-label">Experience:</span> <?php echo htmlspecialchars($row['experience_years']); ?></p>
                                                   <p><span class="partner-label">Class You Teach:</span> <?php echo htmlspecialchars($row['class_you_teach'] !== '' ? $row['class_you_teach'] : 'N/A'); ?></p>
                                                   <p><span class="partner-label">Subject You Teach:</span> <?php echo htmlspecialchars($row['subject_you_teach']); ?></p>
                                                   <p><span class="partner-label">Fluency in English:</span> <?php echo htmlspecialchars($row['english_fluency'] !== '' ? $row['english_fluency'] : 'N/A'); ?></p>
                                                </div>
                                                <div class="partner-detail-card">
                                                   <h6>Additional Details</h6>
                                                   <p><span class="partner-label">School Teaching Experience:</span> <?php echo htmlspecialchars($row['school_teaching_experience'] !== '' ? $row['school_teaching_experience'] : 'N/A'); ?></p>
                                                   <p><span class="partner-label">Photo File:</span> <?php echo htmlspecialchars($row['photo'] !== '' ? $row['photo'] : 'N/A'); ?></p>
                                                   <p><span class="partner-label">Resume File:</span> <?php echo htmlspecialchars($row['resume'] !== '' ? $row['resume'] : 'N/A'); ?></p>
                                                   <?php if (!empty($row['photo'])) { ?>
                                                      <p><a class="btn btn-primary btn-sm mt-2" target="_blank" href="assets/partner-photos/<?php echo urlencode($row['photo']); ?>">Open Photo</a></p>
                                                   <?php } ?>
                                                </div>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        ?>
                                    <tr>
                                       <td colspan="8" class="text-center">No partner registrations found.</td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/swiper.min.js"></script>
      <script src="assets/js/nice-select.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <script>
         $(document).ready(function () {
            $(document).on("click", ".partner-toggle-btn", function () {
               var $button = $(this);
               var $mainRow = $button.closest("tr");
               var $detailRow = $mainRow.next(".partner-detail-row");
               var isVisible = $detailRow.is(":visible");

               $(".partner-detail-row").hide();
               $(".partner-toggle-btn").text("View Details");

               if (!isVisible) {
                  $detailRow.show();
                  $button.text("Hide Details");
               }
            });

            $("#partnerSearch").on("input", function () {
               var query = $(this).val().toLowerCase().trim();

               $(".partner-main-row").each(function () {
                  var $mainRow = $(this);
                  var $detailRow = $mainRow.next(".partner-detail-row");
                  var haystack = ($mainRow.data("search") || "").toString();
                  var matches = haystack.indexOf(query) !== -1;

                  $mainRow.toggle(matches);
                  if (!matches) {
                     $detailRow.hide();
                     $mainRow.find(".partner-toggle-btn").text("View Details");
                  }
               });
            });
         });
      </script>
   </body>
</html>
