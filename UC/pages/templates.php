<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/templates.css">
    <link rel="stylesheet" href="../style/header.css">
</head>
<body>
<?php include '../header.html'; ?>

    <div class="container mt-5">
        <h2>Select a Letter Template</h2>
        
        <!-- Template Selection Buttons -->
        <div class="btn-group" role="group">
            <button class="btn1 btn-primary" onclick="loadTemplate(medicalTemplate)">Medical Leave Letter</button>
            <button class="btn2 btn-primary" onclick="loadTemplate(attendanceTemplate)">Attendance Excuse Letter</button>
            <button class="btn3 btn-primary" onclick="loadTemplate(accommodationTemplate)">Hostel Accommodation</button>
        </div>
        
        <!-- Editable Text Area for Letter Content -->
        <div class="mt-4">
            <h3>Letter Content</h3>
            <textarea id="letterContent" class="form-control" rows="10"></textarea>
        </div>

        <!-- Download Button -->
        <button class="btn btn-success mt-3" onclick="downloadLetter()">Download Letter</button>
    </div>
    
 
</section>
<section class="cta-section1 text-white py-3" >
  <div class="container text-center">
  </div>
</section>
  </section>
  <section class="cta-section text-white py-4" >
    <div class="container text-center">
    </div>
</section>
  <!-- Footer -->
  <?php include '../footer.html'; ?>

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

     <!-- Load Templates from External JavaScript File -->
     <script src="../templates.js"></script>
    
    <!-- JavaScript to Set User Email -->
    <script src="profilescript.js"></script>
</body>
</html>
