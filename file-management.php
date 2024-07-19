<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<meta name="google-site-verification" content="0EDwQp3sEszKlbXfUGXHKNjj71H_mpp99ZGGx0SUeP4" />
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
<link rel='stylesheet' href='css/icons.css'>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<title>Admin Panel</title>
</head>
<body>

    <nav>
        <div class="nav-bar-logo">
            <i class="fa-regular fa-bars" id="side-nav"></i>
            <a href="#"><img src="img/logo.png" alt="logo"></a>
        </div>
        <i id="account-details" class="fi fi-rr-menu-dots-vertical three-dots"></i>
    </nav>

    <!--2nd Nav Start-->

    <div id="content-wrapper">
        <div class="second-nav">
            <div class="profile">
                <div class="profile-photo">
                    <img src="assets/profile-avatar.webp" alt="Admin Profile Picture">
                </div>
                <div class="profile-name-royality">
                    <strong class="profile-name">MD Hasan Ejaz</strong>
                    <small class="royality">owner</small>
                </div>
            </div>
            <a href="index.html"><i class="fi fi-rr-dashboard"></i>Dashboard</a>
            <a href=""><i class="fi fi-rr-settings"></i>General Setting</a>
            <a href="file-management.html" class="active"><i class="fi fi-rr-apps-add"></i>Files Management</a>
            <a href=""><i class="fi fi-rr-interactive"></i>Ads Click</a>
            <a href=""><i class="fi fi-rr-rotate-right"></i>Page Reload</a>
            <a href=""><i class="fi fi-rr-chart-histogram"></i>Website Statics</a>
            <a href=""><i class="fi fi-rr-lightbulb-on"></i>Techyar Ideas</a>
            <a href=""><i class="fi fi-rr-multiple-alt"></i>Techyar Digital</a>
            <a href=""><i class="fi fi-rr-money-bill-wave"></i>Payments Manager</a>
            <a href=""><i class="fi fi-rr-sign-in-alt"></i>Login History</a>
        </div>
    </div>

    <!--2nd Nav End-->
    

    <!--Main Body Content Start-->
    <!--Main Body Content Start-->
    <!--Main Body Content Start-->

    <main>
        <h2 class="page-title-headings">Manage Files</h2>
        <section class="upload-apk-details">
            <form action="upload.php" method="POST" enctype="multipart/form-data" style="display: flex;flex-wrap: wrap;">
                <div class="input-box">
                    <label for="Name">File Name</label>
                    <input type="text" placeholder="File Name" name="Name" required>
                </div>
                <div class="input-box">
                    <label for="Description">File Description</label>
                    <input type="text" placeholder="File Description" name="Description" required>
                </div>
                <div class="input-box">
                    <label for="Categories">Tags (Categories)</label>
                    <input type="text" placeholder="File Category" name="Categories" required>
                </div>
                <div class="input-box">
                    <label for="Price">App Price (Optional)</label>
                    <input type="text" value="Free" placeholder="File Price" name="Price" required>
                </div>
                <div class="input-box">
                    <label for="Image">File Preview Image</label>
                    <input type="file" name="Image" accept="image/*" id="fileInput" required>
                </div>
                <div class="input-box">
                    <label for="Url">Select File</label>
                    <input type="file" name="Url" required>
                </div>
                <div class="input-box">
                    <button type="submit" class="upload-btn" style="cursor: pointer;">Upload</button>
                </div>
            </form>
        </section>

    </main>

    <!--Main Body Content End-->
    <!--Main Body Content End-->
    <!--Main Body Content End-->
    
    
    
    
    
</body>
<script>
    const fileInput = document.querySelector('.fileInput');
    const fileName = document.querySelector('.fileName');

    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            fileName.textContent = file.name;
        } else {
            fileName.textContent = 'No file chosen';
        }
    });
</script>
<script src="js/nav.js"></script>
<script src="js/second-nav.js"></script>
<script src="js/max-icon-size.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</html>