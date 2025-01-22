<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-image: url(ham.jpg);
        background-size: cover;
        background-position: center;
    }

    .dropdown {
    position: relative;
  background-color: rgba(240, 244, 237, 0.8);
  padding: 10px;
  border-radius: 7px;
  margin-top: 140px;
}

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #fffffb;
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #c4fceb;
    }

    .content h1 {
  font-size: 70px;
  margin-top: 80px;
}

.content {
  width: 100%;
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  text-align: center;
  color: #fff;
}

.content p {
  margin: 20px auto;
  font-weight: 100;
  line-height: 25px;
  margin-top:-40px;
}
</style>
</head>
<body>

  <div class="content">
    <h1>Housing Society</h1>
    <p>Building dreams,fostering schemes</p>
  </div>
    <div class="dropdown">
        <button class="dropbtn"> View Socities</button>
        <div class="dropdown-content">
            <a href="societies/rishbh.php?society_id=1">Rishbh Siddhi Society</a>
            <a href="societies/vardha.php?society_id=2">Vardha Society</a>
            <a href="societies/hari.php?society_id=3">Hari Priya Society</a>
            <a href="societies/vishwa.php?society_id=4">Vishwakarma Society</a>
        </div>
    </div>
</body>
</html>
