<?php $__env->startSection('content'); ?>
    @parent
    <div class="container">
        <div class="row">
            <div id="main-spread">
                <div class="panel panel-default">
                    <div class="panel-heading" id="panel-title"><?php echo e(Auth::user()->username); ?>'s RERA Dashboard</div>
                    <div class="panel-body" id="pb-zero">
                        <!-- Main Page Content Goes Here!!-->
                        <div class="form-container">
                            <div class="row">
                                <div class="panel with-nav-tabs panel-primary">
                                    <div class="panel-heading" id="hdg-one">
                                        <ul class="nav nav-tabs" id="click-tabs">
                                            <li role="presentation" class="active" id="hcpro-li"><a role="tab" href="#dash-home-tab" aria-controls="dashboard home" data-toggle="tab">Dashboard Home</a></li>
                                            <li role="presentation" id="admin-li"><a role="tab" href="#wheelchairs-tab" aria-controls="wheelchairs" data-toggle="tab">Wheelchairs</a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body" id="pb-one">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="dash-home-tab">
                                                <div class="form-container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default" id="form-panel">
                                                                <div class="panel-heading" id="form-head">Current Wheelchair Requests</div>
                                                                <div class="panel-body" id="pb_inside" >
                                                                    <table>
                                                                        <tr>
                                                                            <th>Patient</th>
                                                                            <th>Therapist</th>
                                                                            <th>Unit</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Alfred Futterkiste</td>
                                                                            <td>Maria Anders</td>
                                                                            <td>Spruce</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Bob Crabapple</td>
                                                                            <td>Francisco Chang</td>
                                                                            <td>Maple</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ernst Handel</td>
                                                                            <td>Roland Green</td>
                                                                            <td>Oak</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Iris Treadwell</td>
                                                                            <td>Helen Bennett</td>
                                                                            <td>Birch</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Bernie Murphy</td>
                                                                            <td>Yoshi Tannamuri</td>
                                                                            <td>Oak</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Magazzini Riuniti</td>
                                                                            <td>Giovanni Rovelli</td>
                                                                            <td>Spruce</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                                <p class="help-desk" align="center">Having trouble with this App? Dial 484.596.HELP (4357)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="wheelchairs-tab">
                                                <div class="form-container">
                                                    <div class="row" id="form-row">
                                                        <div class="col-md-12">
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" id="wc-panel-head">
                                                                    <h5 id="wc-req-head-title">RERA Wheelchair Request Form Wizard</h5>
                                                                </div>
                                                                <div class="form-horizontal" role="form">
                                                                    <!-- Start Of 2nd Tab Form -->
                                                                    <form>
                                                                        <div class="container">
                                                                            <div class="row" id="wizard-row">
                                                                                <section>
                                                                                    <div class="wizard">
                                                                                        <div class="wizard-inner">
                                                                                            <div class="connecting-line"></div>
                                                                                            <ul class="nav nav-tabs" role="tablist">
                                                                                                <!-- Step 1 List Heading -->
                                                                                                <li role="presentation" class="active">
                                                                                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                                                                            <span class="round-tab">
                                                                                                                <i class="step-numbers">STEP 1</i>
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <!-- Step 2 List Heading -->
                                                                                                <li role="presentation" class="disabled">
                                                                                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                                                                            <span class="round-tab">
                                                                                                                <i class="step-numbers">STEP 2</i>
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <!-- Step 3 List Heading -->
                                                                                                <li role="presentation" class="disabled">
                                                                                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                                                                                            <span class="round-tab">
                                                                                                                <i class="step-numbers">STEP 3</i>
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <!-- Step 4 List Heading -->
                                                                                                <li role="presentation" class="disabled">
                                                                                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                                                                                            <span class="round-tab">
                                                                                                                <i class="step-numbers">STEP 4</i>
                                                                                                            </span>
                                                                                                    </a>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <!-- Start of Step 1 Form -->
                                                                                        <form role="form">
                                                                                            <div class="tab-content">
                                                                                                <!-- Start of Step 1 Select Form Panel -->
                                                                                                <div class="tab-pane active" role="tabpanel" id="step1">
                                                                                                <?php echo e(csrf_field()); ?>


                                                                                                <!-- Patient Location Title -->
                                                                                                    <h5 id="patient-info-title">Patient Information</h5>
                                                                                                    <div id="fg-wrap"></div>
                                                                                                    <!-- Unit Select Form Group # 1 -->
                                                                                                    <div id="fg-fw-1" class="form-group">
                                                                                                        <label for="unit" class="col-md-4 control-label">Unit</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="unit" id="unit" class="unit form-control select-picker show-tick" name="unit" data-style="btn-info" autofocus>
                                                                                                                <option value="0">Choose A Unit</option>
                                                                                                                <option value="1">Spruce</option>
                                                                                                                <option value="2">Birch</option>
                                                                                                                <option value="3">Maple</option>
                                                                                                                <option value="4">Oak</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Patient Name Select Form Group # 2 -->
                                                                                                    <div id="fg-fw-2" class="form-group">
                                                                                                        <label for="patient_name" class="col-md-4 control-label">Patient Name</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="patient_name" id="patient_name" class="patientname form-control select-picker show-tick" name="patient_name" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Room Select Form Group # 3 -->
                                                                                                    <div id="fg-fw-3" class="form-group">
                                                                                                        <label for="room" class="col-md-4 control-label">Room</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="room" id="room" class="room form-control select-picker show-tick" name="room" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Gender Select Form Group # 4 -->
                                                                                                    <div id="fg-fw-4" class="form-group">
                                                                                                        <label for="gender" class="col-md-4 control-label">Gender</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="gender" id="gender" class="form-control select-picker show-tick" name="gender" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Step 2 Button Form Group (page 1) -->
                                                                                                    <div id="fg-step-2" class="form-group">
                                                                                                        <ul class="list-inline pull-right" id="button-group-one">
                                                                                                            <li><button type="button" class="btn btn-primary next-step" id="step-two">Step 2</button></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- Step 2 Tab Panel -->
                                                                                                <div class="tab-pane" role="tabpanel" id="step2">

                                                                                                    <!-- Care Info Title -->
                                                                                                    <h5 id="patient-info-title">Patient Information</h5>

                                                                                                    <!-- Diagnosis Select Form Group # 5 -->
                                                                                                    <div id="fg-fw-5" class="form-group">
                                                                                                        <label for="diagnosis" class="col-md-4 control-label">Diagnosis</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="diagnosis" id="diagnosis" class="form-control select-picker show-tick" name="diagnosis" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Therapist Title Select Form Group # 6 -->
                                                                                                    <div id="fg-fw-6" class="form-group">
                                                                                                        <label for="therapist_title" class="col-md-4 control-label">Therapist Title</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="therapist_title" id="therapist_title" class="form-control select-picker show-tick" name="therapist_title" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Therapist Name Select Form Group # 7 -->
                                                                                                    <div id="fg-fw-7" class="form-group">
                                                                                                        <label for="therapist_name" class="col-md-4 control-label">Therapist Name</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="therapist_name" id="therapist_name" class="form-control select-picker show-tick" name="therapist_name" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Wheelchair Type Select Form Group # 8 -->
                                                                                                    <div id="fg-fw-8" class="form-group">
                                                                                                        <label for="wc_type" class="col-md-4 control-label">Wheelchair Type</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_type" id="wc_type" class="form-control select-picker show-tick" name="wc_type" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Step 3 Button Form Group (page 2) -->
                                                                                                    <div class="form-group">
                                                                                                        <div class="col-md-4">
                                                                                                            <ul class="list-inline pull-right" id="button-group-two">
                                                                                                                <li><button type="button" class="btn btn-default prev-step" id="back-two">Back</button></li>
                                                                                                                <li><button type="button" class="btn btn-primary next-step" id="step-three">Step 3</button></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Step 3 Tab Panel -->
                                                                                                <div class="tab-pane" role="tabpanel" id="step3">

                                                                                                    <!-- Wheelchair Info Title -->
                                                                                                    <h5 id="wc-info-title">Wheelchair Information</h5>

                                                                                                    <!-- Impatient Wheelchair Model Select Form Group # 9 -->
                                                                                                    <div id="fg-fw-9" class="form-group">
                                                                                                        <label for="wc_model" class="col-md-4 control-label">Wheelchair Model</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_model" id="wc_model" class="form-control select-picker show-tick" name="wc_model" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Inpatient Wheelchair Brand Select Form Group # 10 -->
                                                                                                    <div id="fg-fw-10" class="form-group">
                                                                                                        <label for="wc_brand" class="col-md-4 control-label">Wheelchair Brand</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_brand" id="wc_brand" class="form-control select-picker show-tick" name="wc_brand" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Wheelchair Dimensions Select Form Group # 11 -->
                                                                                                    <div id="fg-fw-11" class="form-group">
                                                                                                        <label for="wc_dimensions" class="col-md-4 control-label">Wheelchair Dimensions</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_dimensions" id="wc_dimensions" class="form-control select-picker show-tick" name="wc_dimensions" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Wheelchair Height Select Form Group # 12 -->
                                                                                                    <div id="fg-fw-12" class="form-group">
                                                                                                        <label for="wc_height" class="col-md-4 control-label">Wheelchair Height</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_height" id="wc_height" class="form-control select-picker show-tick" name="wc_height" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Step 4 Button Form Group (page 3) -->
                                                                                                    <div class="form-group">
                                                                                                        <ul class="list-inline pull-right" id="button-group-three">
                                                                                                            <li><button type="button" class="btn btn-default prev-step" id="back-two">Back</button></li>
                                                                                                            <li><button type="button" class="btn btn-primary btn-info-full next-step" id="step-four">Step 4</button></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <!-- Step 4 Tab Panel -->
                                                                                                <div class="tab-pane" role="tabpanel" id="step4">

                                                                                                    <!-- Wheelchair Info Title -->
                                                                                                    <h5 id="wc-info-title">Wheelchair Information</h5>

                                                                                                    <!-- Wheelchair Back Select Form Group # 13 -->
                                                                                                    <div id="fg-fw-13" class="form-group">
                                                                                                        <label for="wc_back" class="col-md-4 control-label">Wheelchair Back</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="wc_back" id="wc_back" class="form-control select-picker show-tick" name="wc_back" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Cushion Type Select Form Group # 14 -->
                                                                                                    <div id="fg-fw-14" class="form-group">
                                                                                                        <label for="cushion_type" class="col-md-4 control-label">Cushion Type</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="cushion_type" id="cushion_type" class="form-control select-picker show-tick" name="cushion_type" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Cushion Dimensions Select Form Group # 15 -->
                                                                                                    <div id="fg-fw-15" class="form-group">
                                                                                                        <label for="cushion_dimensions" class="col-md-4 control-label">Cushion Dimensions</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="cushion_dimensions" id="cushion_dimensions" class="form-control select-picker show-tick" name="cushion_dimensions" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Armrest Type Select Form Group # 16 -->
                                                                                                    <div id="fg-fw-16" class="form-group">
                                                                                                        <label for="armrest_type" class="col-md-4 control-label">Armrest Type</label>
                                                                                                        <div class="col-md-4">
                                                                                                            <select title="armrest_type" id="armrest_type" class="form-control select-picker show-tick" name="armrest_type" data-style="btn-info" autofocus>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- Submit Button Form Group (page 4) -->
                                                                                                    <div class="form-group">
                                                                                                        <div class="col-md-4">
                                                                                                            <ul class="list-inline pull-right" id="button-group-four">
                                                                                                                <li><button type="button" class="btn btn-default prev-step" id="back-three">Back</button></li>
                                                                                                                <li><button type="submit" class="btn btn-primary" id="submit-req">Submit Request</button></li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    </div>
                                                                                                    <div class="clearfix"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </section>
                                                                            </div>
                                                                        </div>
                                                                        <p class="help-desk" id="app-help" align="center">Having trouble using this App? Dial 484.596.HELP (4357)</p>
                                                                    </form>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>