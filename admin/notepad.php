
    <title>Notepad</title>
    <link rel="stylesheet" href="../assets/css/notepad.css">

<body>
<div id="main">

    <div class="container">
        <div class="card shadow-sm rounded-0">
            <div class="card-body">
                <h5 class="card-title">Add New Note</h5>
                <div class="form-group">
                    <input type="hidden" name="key" value="">
                    <textarea id="addTxt" class="form-control rounded-0" rows="3"></textarea>
                     <button id="addBtn" class="btn btn-primary rounded-0">Add Note</button>
                    <button id="cancelBtn" class="btn btn-secindary rounded-0 border">Cancel</button>
                    
                </div>
                <div class="text-center">
                    <button id="addBtn" class="btn btn-primary rounded-0">Add Note</button>
                    <button id="cancelBtn" class="btn btn-secondary rounded-0 border">Cancel</button>
                </div>
            </div>
        </div>
        
        <div id="notes" class="row container-fluid m-2">
        </div>
    </div>
</div>
    <!----------JAVASCRIPT--------->
    <script src="../assets/js/app.js"></script>
    <script src="../assetsjs/popper.min.js"></script>
    <script src="../assetsjs/bootstrap.min.js"></script>
    <script src="../assetsjs/app.js"></script>
</body>

