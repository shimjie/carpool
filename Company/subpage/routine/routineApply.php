<div class="form-toggle applypageclosebtn visible"></div>

<!-- Form-->
<div class="form" id = "driver-apply">
    <div class="form-panel one">
        <div class="form-header">
            <h1>Driver Application</h1>
        </div>
        <div class="form-content">
            <form>
                <div><!-- routine toggle -->
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-success active">
                            <input type="radio" name="options" id="option1" checked> One Way
                        </label>
                        <label class="btn btn-outline-success">
                            <input type="radio" name="options" id="option2"> Return
                        </label>
                    </div>
                </div>

                <div class="form-group"></div>
                
                <div class="form-group"><!-- from -->
                    <div class="form-row">
                        <label>From</label> 
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col">
                            <label>Area</label>
                            <input type="text" class="form-control" placeholder=" ">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>


                <div class="form-group"><!-- to -->
                    <div class="form-row">
                        <label>To</label> 
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label>Region </label>   
                            <input type="text" class="form-control" placeholder="">
                        </div> <!-- form-group end.// -->
                        <div class="col">
                            <label>Area</label>
                            <input type="text" class="form-control" placeholder=" ">
                        </div> <!-- form-group end.// -->
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Depart Time:</label>

                            <input type="datetime-local" id="depart-time"
                                name="depart-time" value="2018-06-12T19:30"
                                min="2018-06-07T00:00" max="2018-06-14T00:00">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Return Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="return-time">Depart Time:</label>

                            <input type="datetime-local" id="return-time"
                                name="return-time" value="2018-06-12T19:30"
                                min="2018-06-07T00:00" max="2018-06-14T00:00">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><!--Depart Time Setting -->
                    <div class="form-row">
                        <div class="col">
                            <label for="depart-time">Request Vailde Time:</label>

                            <input type="datetime-local" id="depart-time"
                                name="depart-time" value="2018-06-12T19:30"
                                min="2018-06-07T00:00" max="2018-06-14T00:00">
                        </div>
                    </div> <!-- form-row end.// -->
                </div>

                <div class="form-group"><label for="username">Number of Passager</label><input type="text" id="num_passager" name="num_passager" required="required" /></div>

                <div class="form-group"><label for="username">Description</label>
                    <textarea id="driver_description" name="w3review" rows="4" cols="50"></textarea>
                </div>
                <div class="form-group"><button type="submit">Submit</button></div>
            </form>
        </div>
    </div>
</div>

<div class="form" id = "passager-apply">
    <div class="form-panel one">
        <div class="form-header">
            <h1>Passager Application</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group"><label for="username">From</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><label for="username">To</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><label for="username">Type</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><label for="username">Time</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><label for="username">Number of Passager</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><button type="submit">Submit</button></div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="assets/js/routine-Apply.js"></script>