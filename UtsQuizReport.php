<?php include 'header.php';?>
<?php include 'navbar.php';?>
<?php include 'sidebar.php';?>
<div class="  pl-3">
    <div class="">
        <h3 class=" ">Uts Quiz Report</h3>
    </div>
    <!-- edit here -->
    <div class=" pt-5  ">
        <div class=" pt-4">
            <div class="card " style="width: 100%;">
                <div class="card-body">
                    <div class=" bg-light  ">
                        <div class="row">
                            <div class="col-md-9  col-sm-12 ">
                                <div class=" row">
                                    <div class=" col-md-12  col-sm-12">
                                        <div class="d-inline-block pr-2">
                                            <p style="">Show
                                                <select class=" px-2">
                                                    <option value="volvo">10</option>
                                                    <option value="saab">20</option>
                                                    <option value="opel">30</option>
                                                    <option value="audi">40</option>
                                                </select>
                                                Entries
                                            </p>
                                        </div>
                                        <div class="d-inline-block" style="">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-default" onclick="myFunction()">Print</button>
                                                <button type="button" class="btn btn-default   download"
                                                      onclick="exportTableToCSV('utsQuizReport.csv')" 
                                                >CSV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 ">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            </div>
                        </div>
                        <div>
                            <div class=" table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Student Name</th>
                                            <th scope="col">mobile No</th>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Marks Got</th>
                                            <th scope="col">Total Makrks </th>
                                            <th scope="col">Downlaod Response </th>
                                            <th scope="col" class=" text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John doe</td>
                                            <td>234234234</td>
                                            <td>uts Quiz</td>
                                            <td>6</td>
                                            <td>10</td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn  btn-success btn-xs d-inline  mr-2">Download </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn btn-warning btn-xs d-inline  mr-2" onclick="sweetaleartclick()">Reset Response</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>John doe</td>
                                            <td>234234234</td>
                                            <td>uts Quiz</td>
                                            <td>6</td>
                                            <td>10</td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn  btn-success btn-xs d-inline  mr-2">Download </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn btn-warning btn-xs d-inline  mr-2" onclick="sweetaleartclick()">Reset Response</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>John doe</td>
                                            <td>234234234</td>
                                            <td>uts Quiz</td>
                                            <td>6</td>
                                            <td>10</td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn  btn-success btn-xs d-inline  mr-2">Download </button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class=" text-center">
                                                    <button type="button" class="btn btn-warning btn-xs d-inline  mr-2" onclick="sweetaleartclick()">Reset Response</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link " href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- script  for  sweet aleart-->
<script>
    function sweetaleartclick() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

</script>
<script>
function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;
    // CSV file
    csvFile = new Blob([csv], {type: "text/csv"});
    // Download link
    downloadLink = document.createElement("a");
    // File name
    downloadLink.download = filename;
    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);
    // Hide download link
    downloadLink.style.display = "none";
    // Add the link to DOM
    document.body.appendChild(downloadLink);
    // Click download link
    downloadLink.click();
}
    function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");
    for (var i = 0; i < rows.length; i++) {
        var row = [], cols = rows[i].querySelectorAll("td, th");
        for (var j = 0; j < cols.length; j++) 
            row.push(cols[j].innerText);
        csv.push(row.join(","));        
    }
    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
</script>
<?php include 'footer.php';?>
