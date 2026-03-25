<?php
include 'admin/master/connection.php';

$form_alert = '';
$form_data = [
    'first_name' => '',
    'last_name' => '',
    'profile_type' => '',
    'gender' => '',
    'phone' => '',
    'alternate_phone' => '',
    'email' => '',
    'current_address' => '',
    'pin_code' => '',
    'permanent_address' => '',
    'city' => '',
    'state' => '',
    'qualification' => '',
    'class_you_teach' => '',
    'preferred_area' => '',
    'service_area' => '',
    'experience_years' => '',
    'subject_you_teach' => '',
    'english_fluency' => '',
    'school_teaching_experience' => '',
];
function sw_partner_value($key, $default = '')
{
    global $form_data;
    return htmlspecialchars(isset($form_data[$key]) ? $form_data[$key] : $default);
}

function sw_partner_upload($file_key, $target_dir, $allowed_extensions, $max_size_bytes)
{
    if (!isset($_FILES[$file_key]) || $_FILES[$file_key]['error'] !== UPLOAD_ERR_OK) {
        return [false, 'File upload failed for ' . $file_key . '.'];
    }

    if ($_FILES[$file_key]['size'] > $max_size_bytes) {
        return [false, 'Uploaded file is too large for ' . $file_key . '.'];
    }

    $original_name = basename($_FILES[$file_key]['name']);
    $extension = strtolower(pathinfo($original_name, PATHINFO_EXTENSION));
    if (!in_array($extension, $allowed_extensions, true)) {
        return [false, 'Invalid file type for ' . $file_key . '.'];
    }

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    $safe_name = preg_replace('/[^A-Za-z0-9_-]/', '-', pathinfo($original_name, PATHINFO_FILENAME));
    $file_name = time() . '-' . mt_rand(1000, 9999) . '-' . $safe_name . '.' . $extension;
    $target_path = rtrim($target_dir, '/\\') . DIRECTORY_SEPARATOR . $file_name;

    if (!move_uploaded_file($_FILES[$file_key]['tmp_name'], $target_path)) {
        return [false, 'Failed to save uploaded file for ' . $file_key . '.'];
    }

    return [true, $file_name];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($form_data as $field => $value) {
        $form_data[$field] = trim(isset($_POST[$field]) ? $_POST[$field] : '');
    }

    list($photo_ok, $photo_result) = sw_partner_upload(
        'photo',
        __DIR__ . '/admin/assets/partner-photos',
        ['jpg', 'jpeg', 'png', 'webp'],
        2 * 1024 * 1024
    );
    list($resume_ok, $resume_result) = sw_partner_upload(
        'resume',
        __DIR__ . '/admin/assets/partner-resumes',
        ['pdf', 'doc', 'docx'],
        5 * 1024 * 1024
    );

    if (!$photo_ok) {
        $form_alert = "<script>alert('" . addslashes($photo_result) . "');</script>";
    } elseif (!$resume_ok) {
        $form_alert = "<script>alert('" . addslashes($resume_result) . "');</script>";
    } else {
        $first_name = mysqli_real_escape_string($con, $form_data['first_name']);
        $last_name = mysqli_real_escape_string($con, $form_data['last_name']);
        $profile_type = mysqli_real_escape_string($con, $form_data['profile_type']);
        $gender = mysqli_real_escape_string($con, $form_data['gender']);
        $phone = mysqli_real_escape_string($con, $form_data['phone']);
        $alternate_phone = mysqli_real_escape_string($con, $form_data['alternate_phone']);
        $email = mysqli_real_escape_string($con, $form_data['email']);
        $current_address = mysqli_real_escape_string($con, $form_data['current_address']);
        $pin_code = mysqli_real_escape_string($con, $form_data['pin_code']);
        $permanent_address = mysqli_real_escape_string($con, $form_data['permanent_address']);
        $city = mysqli_real_escape_string($con, $form_data['city']);
        $state = mysqli_real_escape_string($con, $form_data['state']);
        $qualification = mysqli_real_escape_string($con, $form_data['qualification']);
        $class_you_teach = mysqli_real_escape_string($con, $form_data['class_you_teach']);
        $preferred_area = mysqli_real_escape_string($con, $form_data['preferred_area']);
        $service_area = mysqli_real_escape_string($con, $form_data['service_area']);
        $experience_years = mysqli_real_escape_string($con, $form_data['experience_years']);
        $subject_you_teach = mysqli_real_escape_string($con, $form_data['subject_you_teach']);
        $english_fluency = mysqli_real_escape_string($con, $form_data['english_fluency']);
        $school_teaching_experience = mysqli_real_escape_string($con, $form_data['school_teaching_experience']);
        $services = '';
        $facilities = '';
        $photo_name = mysqli_real_escape_string($con, $photo_result);
        $resume_name = mysqli_real_escape_string($con, $resume_result);

        $query = "INSERT INTO `partner_registrations` (
            `first_name`, `last_name`, `profile_type`, `photo`, `gender`, `phone`, `alternate_phone`, `email`,
            `current_address`, `pin_code`, `permanent_address`, `city`, `state`, `services`, `facilities`,
            `qualification`, `class_you_teach`, `preferred_area`, `service_area`, `experience_years`,
            `subject_you_teach`, `english_fluency`, `school_teaching_experience`, `resume`
        ) VALUES (
            '$first_name', '$last_name', '$profile_type', '$photo_name', '$gender', '$phone', '$alternate_phone', '$email',
            '$current_address', '$pin_code', '$permanent_address', '$city', '$state', '$services', '$facilities',
            '$qualification', '$class_you_teach', '$preferred_area', '$service_area', '$experience_years',
            '$subject_you_teach', '$english_fluency', '$school_teaching_experience', '$resume_name'
        )";

        if (mysqli_query($con, $query)) {
            $form_alert = "<script>alert('Registration submitted successfully');window.location.href='partner-registration';</script>";
        } else {
            @unlink(__DIR__ . '/admin/assets/partner-photos/' . $photo_result);
            @unlink(__DIR__ . '/admin/assets/partner-resumes/' . $resume_result);
            $form_alert = "<script>alert('Failed to submit registration: " . addslashes(mysqli_error($con)) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Partner Registration - Study Wander</title>
      <?php include("master/style.php") ?>
      <style>
         .partner-hero-card,
         .partner-form-card,
         .partner-info-card {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 18px 60px rgba(26, 39, 81, 0.08);
         }
         .partner-hero-card {
            padding: 36px;
            height: 100%;
         }
         .partner-form-card {
            padding: 30px;
         }
         .partner-form-head {
            border-bottom: 1px solid #e6edf6;
            margin-bottom: 28px;
            padding-bottom: 18px;
         }
         .partner-pill-list {
            display: grid;
            gap: 14px;
         }
         .partner-pill-list {
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            margin-top: 24px;
         }
         .partner-pill {
            background: linear-gradient(135deg, #f8fbff, #eef6ff);
            border: 1px solid #d8e6f8;
            border-radius: 18px;
            padding: 18px 20px;
         }
         .partner-pill ul {
            margin: 14px 0 0;
            padding: 0;
            list-style: none;
         }
         .partner-pill li {
            position: relative;
            padding-left: 26px;
            margin-bottom: 12px;
            line-height: 1.5;
            color: #2a3f63;
         }
         .partner-pill li:last-child {
            margin-bottom: 0;
         }
         .partner-pill li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 8px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff7a18, #ffb347);
            box-shadow: 0 0 0 4px rgba(255, 122, 24, 0.12);
         }
         .partner-pill h5,
         .partner-info-card h5 {
            margin-bottom: 8px;
         }
         .partner-info-card {
            padding: 24px;
            border: 1px solid #edf0f7;
            height: 100%;
         }
         .partner-form-card label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #1d2d50;
         }
         .partner-form-card .form-control,
         .partner-form-card .form-select,
         .partner-form-card textarea {
            border-radius: 12px;
            min-height: 48px;
            border-color: #d9e3f0;
         }
         .partner-form-card textarea {
            min-height: 120px;
         }
         .partner-radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 18px;
            margin-top: 8px;
         }
         .partner-radio-group label {
            font-weight: 500;
            margin: 0;
            display: inline-flex;
            align-items: center;
            gap: 8px;
         }
         .section-mini-title {
            font-size: 14px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #3f5f91;
            margin-bottom: 14px;
         }
         @media (max-width: 767px) {
            .partner-hero-card,
            .partner-form-card {
               padding: 22px;
            }
         }
      </style>
   </head>
   <body>
      <?php echo $form_alert; ?>
      <?php include("master/header.php") ?>

      <main>
         <section class="breadcrumb_area breadcrumb__bg" style="background-image: url(img/images/breadcrumb-bg.jpg)">
            <div class="container">
               <div class="breadcrumb_content ps-2 ps-md-4">
                  <h2 class="title">Partner Registration</h2>
                  <nav class="breadcrumb">
                     <span property="itemListElement" typeof="ListItem"><a href="./">Home</a></span>
                     <span property="itemListElement" typeof="ListItem">&nbsp; / Partner Registration</span>
                  </nav>
               </div>
               <div class="breadcrumb__shape-wrap">
                  <img src="img/svg/breadcrumb-shape1.svg" alt="planet" data-aos="fade-right" data-aos-delay="500" />
                  <img src="img/svg/breadcrumb-shape2.svg" alt="plane" data-aos="fade-up-right" data-aos-delay="600" data-aos-duration="1000" />
                  <img src="img/svg/breadcrumb-shape3.svg" alt="img" data-aos="fade-up" data-aos-delay="300" />
                  <img src="img/svg/breadcrumb-shape4.svg" alt="img" data-aos="fade-down-left" data-aos-delay="400" />
                  <img src="img/svg/breadcrumb-shape5.svg" alt="line" />
               </div>
            </div>
         </section>

         <section class="py-5">
            <div class="container">
               <div class="row g-4 align-items-start">
                  <div class="col-lg-8">
                     <div class="partner-form-card">
                        <div class="partner-form-head">
                           <h3>Register Yourself Here</h3>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data">
                           <div class="row g-4">
                        <div class="col-md-6">
                           <label for="first_name"><strong>First Name *</strong></label>
                           <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First name" required value="<?php echo sw_partner_value('first_name'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="last_name"><strong>Last Name</strong></label>
                           <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last name" value="<?php echo sw_partner_value('last_name'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="profile_type"><strong>Choose Profile *</strong></label>
                           <select id="profile_type" name="profile_type" class="form-select" required>
                              <option value="">Your Profile</option>
                              <option value="Counsellor" <?php echo sw_partner_value('profile_type') === 'Counsellor' ? 'selected' : ''; ?>>Counsellor</option>
                              <option value="Trainer" <?php echo sw_partner_value('profile_type') === 'Trainer' ? 'selected' : ''; ?>>Trainer</option>
                              <option value="Teacher" <?php echo sw_partner_value('profile_type') === 'Teacher' ? 'selected' : ''; ?>>Teacher</option>
                              <option value="Home-Tutor" <?php echo sw_partner_value('profile_type') === 'Home-Tutor' ? 'selected' : ''; ?>>Home-Tutor</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="photo"><strong>Photo Upload *</strong></label>
                           <input type="file" id="photo" name="photo" class="form-control" accept=".jpg,.jpeg,.png,.webp" required />
                        </div>

                        <div class="col-12">
                           <label><strong>Gender</strong></label>
                           <div class="partner-radio-group">
                              <label><input type="radio" name="gender" value="Male" <?php echo sw_partner_value('gender') === 'Male' ? 'checked' : ''; ?> /> Male</label>
                              <label><input type="radio" name="gender" value="Female" <?php echo sw_partner_value('gender') === 'Female' ? 'checked' : ''; ?> /> Female</label>
                              <label><input type="radio" name="gender" value="Prefer not to say" <?php echo sw_partner_value('gender') === 'Prefer not to say' ? 'checked' : ''; ?> /> Prefer not to say</label>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <label for="phone"><strong>Phone Number *</strong></label>
                           <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter phone number." pattern="[0-9]{10}" maxlength="10" required value="<?php echo sw_partner_value('phone'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="alternate_phone"><strong>Alternate number</strong></label>
                           <input type="tel" id="alternate_phone" name="alternate_phone" class="form-control" placeholder="Enter your alternate number." pattern="[0-9]{10}" maxlength="10" value="<?php echo sw_partner_value('alternate_phone'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="email"><strong>Email Id *</strong></label>
                           <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email id." required value="<?php echo sw_partner_value('email'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="current_address"><strong>Current address *</strong></label>
                           <textarea id="current_address" name="current_address" class="form-control" placeholder="Enter Current address." required><?php echo sw_partner_value('current_address'); ?></textarea>
                        </div>
                        <div class="col-md-6">
                           <label for="pin_code"><strong>Pin Code *</strong></label>
                           <input type="text" id="pin_code" name="pin_code" class="form-control" placeholder="Enter Pin Code.." pattern="[0-9]{6}" maxlength="6" required value="<?php echo sw_partner_value('pin_code'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="permanent_address"><strong>Permanent address</strong></label>
                           <textarea id="permanent_address" name="permanent_address" class="form-control" placeholder="Enter Permanent address"><?php echo sw_partner_value('permanent_address'); ?></textarea>
                        </div>
                        <div class="col-md-6">
                           <label for="city"><strong>City *</strong></label>
                           <input type="text" id="city" name="city" class="form-control" placeholder="Enter city name" required value="<?php echo sw_partner_value('city'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="state"><strong>State *</strong></label>
                           <input type="text" id="state" name="state" class="form-control" placeholder="Your State" required value="<?php echo sw_partner_value('state'); ?>" />
                        </div>

                        <div class="col-md-6">
                           <label for="qualification"><strong>Qualification *</strong></label>
                           <input type="text" id="qualification" name="qualification" class="form-control" placeholder="Enter your qualification" required value="<?php echo sw_partner_value('qualification'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="experience_years"><strong>Exprience *</strong></label>
                           <input type="text" id="experience_years" name="experience_years" class="form-control" placeholder="Your exprience" required value="<?php echo sw_partner_value('experience_years'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="class_you_teach"><strong>Class you teach</strong></label>
                           <input type="text" id="class_you_teach" name="class_you_teach" class="form-control" placeholder="Class you teach.." value="<?php echo sw_partner_value('class_you_teach'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="subject_you_teach"><strong>Subject you teach *</strong></label>
                           <input type="text" id="subject_you_teach" name="subject_you_teach" class="form-control" placeholder="Subject you teach.." required value="<?php echo sw_partner_value('subject_you_teach'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="preferred_area"><strong>Preffered area *</strong></label>
                           <input type="text" id="preferred_area" name="preferred_area" class="form-control" placeholder="Preffered area" required value="<?php echo sw_partner_value('preferred_area'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="english_fluency"><strong>Fluency in english</strong></label>
                           <select id="english_fluency" name="english_fluency" class="form-select">
                              <option value="">Fluency in english</option>
                              <option value="Basic" <?php echo sw_partner_value('english_fluency') === 'Basic' ? 'selected' : ''; ?>>Basic</option>
                              <option value="Intermediate" <?php echo sw_partner_value('english_fluency') === 'Intermediate' ? 'selected' : ''; ?>>Intermediate</option>
                              <option value="Fluent" <?php echo sw_partner_value('english_fluency') === 'Fluent' ? 'selected' : ''; ?>>Fluent</option>
                              <option value="Native or Professional" <?php echo sw_partner_value('english_fluency') === 'Native or Professional' ? 'selected' : ''; ?>>Native or Professional</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="service_area"><strong>Mention Your Service Area</strong></label>
                           <input type="text" id="service_area" name="service_area" class="form-control" placeholder="Your Service Area" value="<?php echo sw_partner_value('service_area'); ?>" />
                        </div>
                        <div class="col-md-6">
                           <label for="resume"><strong>Resume *</strong></label>
                           <input type="file" id="resume" name="resume" class="form-control" accept=".pdf,.doc,.docx" required />
                        </div>

                        <div class="col-12">
                           <label><strong>Do you have experience of teaching in school</strong></label>
                           <div class="partner-radio-group">
                              <label><input type="radio" name="school_teaching_experience" value="Yes" <?php echo sw_partner_value('school_teaching_experience') === 'Yes' ? 'checked' : ''; ?> /> Yes</label>
                              <label><input type="radio" name="school_teaching_experience" value="No" <?php echo sw_partner_value('school_teaching_experience') === 'No' ? 'checked' : ''; ?> /> No</label>
                           </div>
                        </div>

                              <div class="col-12">
                                 <button type="submit" class="btn-one mt-2">Submit Registration <i class="fa-solid fa-angle-right"></i></button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="partner-hero-card">
                        <h2>Become Our <span class="down">Partner</span></h2>
                        <div class="partner-pill-list">
                           <div class="partner-pill">
                              <h5>Services</h5>
                              <ul>
                                 <li>Career Counseling and Assessment</li>
                                 <li>Admission Support and Guidance</li>
                                 <li>Career Booster and Profiling</li>
                                 <li>Paramhans Kids</li>
                              </ul>
                           </div>
                           <div class="partner-pill">
                              <h5>Facilities</h5>
                              <ul>
                                 <li>University Collaboration</li>
                                 <li>Expert Trainer</li>
                                 <li>End-to-End Support</li>
                                 <li>Admission</li>
                                 <li>Learning</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

      <?php include("master/footer.php") ?>
      <?php include("master/script.php") ?>
   </body>
</html>
