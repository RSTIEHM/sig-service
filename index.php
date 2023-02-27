<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="style.css">
  <title>SIG | Service Request</title>
</head>

<body>
  <section class="top-bar">
    <h1>Employee Service Request</h1>
  </section>
  <div class="container">
    <form enctype="multipart/form-data" action="" method="POST" class="main-form">
      <section class="form-group employee-type">
        <div class="form-check">
          <input data-id="new" class="" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label emp-label" for="flexRadioDefault1">
            New Employee
          </label>
        </div>
        <div class="form-check">
          <input data-id="transfer" class="" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label emp-label" for="flexRadioDefault2">
            Employee Transfer
          </label>
        </div>
        <div class="form-check">
          <input data-id="separation" class="" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
          <label class="form-check-label emp-label" for="flexRadioDefault2">
            Employee Separation
          </label>
        </div>
      </section>
      <section class="form-group employee-info">
        <label for="employeeNameInput">Employee Name</label>
        <input name="employeeName" type="text" class="form-control input-data" id="employeeNameInput" placeholder="">
        <label for="employeeNameInput">Department</label>
        <input name="employeeDept" type="text" class="form-control input-data" id="employeeNameInput" placeholder="">
        <label for="employeeNameInput">Action Date</label>
        <input name="employeeDate" type="date" class="form-control input-data" id="actionDateInput">
      </section>
      <header class="emp-tech-header">
        <h2>Employee Technology Services</h2>
      </header>
      <section class="form-group tech-services-container">
        <div class="test-color">
          <div>
            <h3>Computer</h3>
            <br>
            <div class="comp-device-type">
              <h4 class="italic">Computer Device Type</h4>
              <div>
                <label for="">Desktop</label>
                <input name="desktop" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">Laptop</label>
                <input name="laptop" type="checkbox" class="comp-input">
              </div>
            </div>
            <div class="comp-device-type">
              <h4 class="italic">Web Cam</h4>
              <div>
                <label for="">Yes</label>
                <input name="webcam" type="checkbox" class="comp-input">
              </div>
            </div>
            <div class="comp-device-type mod">
              <h4 class="italic">Network Drives</h4>
              <div class="mod-div">
                <label class="input-label" for="">*Please List Drives Needed (Separate By Comma)*</label>
                <input name="drive" type="text" class="comp-input">
              </div>
            </div>
            <div class="comp-device-type mod">
              <h4 class="italic">Network Printers</h4>
              <div class="mod-div">
                <label class="input-label" for="">*Please List Nearest Printers (Separate By Comma)*</label>
                <input name="printer" type="text" class="comp-input">
              </div>
            </div>

          </div>
        </div>
        <div class="test-color">
          <div>
            <h3>Telecom</h3>
            <br>
            <div class="comp-device-type">
              <h4 class="italic">Phone Type</h4>
              <div>
                <label for="">Softphone</label>
                <input name="softphone" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">Deskphone</label>
                <input name="deskphone" type="checkbox" class="comp-input">
              </div>

            </div>
            <div class="comp-device-type">
              <h4 class="italic">Direct Number Required</h4>
              <div>
                <label for="">Yes</label>
                <input name="directNumber" type="checkbox" class="comp-input">
              </div>
            </div>
            <div class="comp-device-type">
              <h4 class="italic">Phone Programming</h4>
              <div>
                <label for="">Ring Groups</label>
                <input name="ringGroups" type="checkbox" class="comp-input">
              </div>
            </div>
          </div>
        </div>
        <div class="test-color">
          <div>
            <h3>Software</h3>
            <br>
            <div class="comp-device-type">
              <h4 class="italic">Email Account</h4>
              <div>
                <label for="">SIG</label>
                <input name="sigEmail" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">AA</label>
                <input name="aaEmail" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">SIS</label>
                <input name="sisEmail" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">SFG</label>
                <input name="sfgEmail" type="checkbox" class="comp-input">
              </div>
            </div>
            <div class="all-inputs">
              <div>
                <label for="">ACT!</label>
                <input name="ACT" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">Acrobat</label>
                <input name="Acrobat" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">AssetTrust</label>
                <input name="AssetTrust" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">ClickUp</label>
                <input name="ClickUp" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">DropBox</label>
                <input name="DropBox" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">FileMaker</label>
                <input name="FileMaker" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">FileZilla</label>
                <input name="FileZilla" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">GoogleDrive</label>
                <input name="GoogleDrive" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">HubSpot</label>
                <input name="HubSpot" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">OneDrive</label>
                <input name="OneDrive" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">OpenPath</label>
                <input name="OpenPath" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">ProSeries</label>
                <input name="ProSeries" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">QuickBooks</label>
                <input name="QuickBooks" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">RedBlack</label>
                <input name="RedBlack" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">RedTail</label>
                <input name="RedTail" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">SureLC</label>
                <input name="SureLC" type="checkbox" class="comp-input">
              </div>
              <div>
                <label for="">Zoom</label>
                <input name="Zoom" type="checkbox" class="comp-input">
              </div>
            </div>

          </div>
        </div>
      </section>
      <br>
      <input type="submit" value="Submit" class="btn btn-primary">
    </form>
  </div>
  <script>
    const form = document.querySelector(".main-form");
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      let employeeType;
      const flexRadioDefault1 = document.querySelector("#flexRadioDefault1");
      const flexRadioDefault2 = document.querySelector("#flexRadioDefault2");
      const flexRadioDefault3 = document.querySelector("#flexRadioDefault3");
      if (flexRadioDefault1.checked) {
        employeeType = "New"
      }
      if (flexRadioDefault2.checked) {
        employeeType = "Transfer"
      }
      if (flexRadioDefault3.checked) {
        employeeType = "Quit"
      }
      const formData = new FormData(form);
      let newEntry = {};
      for (item of formData) {
        if (item[0] === "flexRadioDefault") {
          newEntry["employeeType"] = employeeType;
        } else {
          newEntry[item[0]] = item[1];
        }
      }
      fetch("ajaxHandler.php", {
        "method": "POST",
        "headers": {
          "Content-Type": "application/json;charset=UTF-8"
        },
        "body": JSON.stringify(newEntry)
      }).then(function(response) {
        return response.text()
      }).then(function(data) {
        console.log("BEFORE DATA")
        console.log(data)
        console.log("AFTER DATA")
        // window.location.assign("./success.php");
      })

    })
  </script>

</body>

</html>