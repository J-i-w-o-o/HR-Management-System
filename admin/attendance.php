<title>Attendance</title>


<link rel="stylesheet" href="../assets/css/attendance.css">
<div id="main">
    <div class="d-flex justify-content-center mt-3">
    <img src="../assets/images/jibble.png" alt="Logo" width="120" height="40">
    </div>
    <section id="hero" class=" align-items-center">
    <div class="d-flex justify-content-between align-items-center mx-2">
      <h6 class="mt-2 ms-3">EMPLOYEES ATTENDANCE RECORD</h6>
      <form class="d-flex forms my-3">
        <input type="text" id="Imoogi" class="form-control form-control-sm me-2" placeholder="Search for Employee">
        <button type="submit" class="btn btn-sm" id="searchIcon">
              <i class="fas fa-search"></i>
            </button>
      </form>
    </div>
    <div id="table-scroll" class="table-scroll">
      <div class="table-wrap">
        <table class="main-table">
          <div id="tableres">

            <div id="tableres" style="overflow-x:auto;">
              <table>
                <div>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Total Attendance </th>
                  </tr>
                </div>
              
              </table>
            </div>
          </div>
        </table>
      </div>
    </div>
  </section>
</div>