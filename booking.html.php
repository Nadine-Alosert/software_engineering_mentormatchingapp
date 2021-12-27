<?php
$pageTitle="Booking";
  ob_start() ?>
<h2 class="text-sm-left p-3">Select date to book mentor</h2>
    
    <!-- Profile Rating -->
    <div class="Booking bg-white Profile-Rating mx-3 border border-dark rounded">
        <div class="media py-2">
            <img src="templates/assets/profile.png"  width="140px" height="100px" alt="profilepic">
            <div class="Booking">
                <h4 class="font-weight-bold d-inline">Travis Scott</h4>
                <h5 class="d-inline ml-2">Data Science</h5>
                <div class="rating d-inline ml-3">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                </div>
                <p class="text-muted pt-2 mr-4">
                    Hi, I have studying data science for 12 years now and can comfortably 
                    say that i am an expert in this field. I will help you understand how 
                    data science works and its practicality. 
                </p>
            </div>
        </div>    
    </div>
    <!-- END Profile Rating-->

    <div class="Booking bg-white mx-3 border border-dark row mt-3">
        <div class="row w-100 mx-3 mt-4">
            <!-- Date -->
            <div class="col-sm-7">
                <h4>Today's Date</h4>
                <p>12th March 2021</p>
            </div>
            <h5 class="col-sm-2 mt-4 pl-4">Select Date</h5>
            <section class="col-sm-3 mt-3">
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- END Date -->

        <!-- Calendar -->
        <div class="w-100">
            <div class="Booking Calendar mx-3 mt-2 mb-5 table-bordered">
                <table class="table table-striped  text-center">
                    <caption>Available Bookings</caption>
                    <thead>
                        <tr class="bg-primary text-white h4">
                            <th scope="col"  colspan="7">March</th>
                        </tr>
                    </thead>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Monday</th>
                            <th scope="col">Tuesday</th>
                            <th scope="col">Wednesday</th>
                            <th scope="col">Thursday</th>
                            <th scope="col">Friday</th>
                            <th scope="col">Saturday</th>
                            <th scope="col">Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>                    
                            <td>6</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>                    
                            <td>13</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                            <td>19</td>                    
                            <td>20</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>                    
                            <td>27</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>29</td>
                            <td>30</td>
                            <td>31</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- END Calendar -->

    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>

<?php

$content = ob_get_clean();

include "layout.html.php";
?>
