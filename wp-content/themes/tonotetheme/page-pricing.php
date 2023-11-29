<?php get_header(); ?>
<?php

$monthly_plans = get_field('monthly_plans');
$annual_plans = get_field('annual_plans');

$get_started = get_field('get_started');


?>

<section class="">
    <div class="container mt-100 mt-60">
        <div class="py-5"
            style="width: 100%; text-align: center; color: #101828; font-size: 48px; font-family: Poppins; font-weight: 500; line-height: 72px; word-wrap: break-word">
            Pricing plans</div>

        <div style="width: 100%; text-align: center"><span
                style="color: #344054; font-size: 20px; font-family: Poppins; font-weight: 400; line-height: 30px; word-wrap: break-word">
                Simple,
                transparent pricing that grows with you. Try any of the plans that suit your team and business interest.
            </span>
            <br>
            <span
                style="color: #003BB3; font-size: 20px; font-family: Poppins; font-weight: 600; line-height: 30px; word-wrap: break-word">Contact
                us </span><span
                style="color: #344054; font-size: 20px; font-family: Poppins; font-weight: 400; line-height: 30px; word-wrap: break-word">for
                customizations.</span>
        </div>


        <div class="row align-items-center">
            <div class="col-12 mt-4 pt-2">
                <div class="d-flex justify-content-between">
                    <ul class="nav nav-pills rounded-pill justify-content-center d-inline-block border py-1 px-2"
                        id="pills-tab" role="tablist">
                        <li class="nav-item d-inline-block" role="presentation">
                            <a class="nav-link px-3 rounded-pill active monthly" id="Monthly" data-bs-toggle="pill"
                                href="#Month" role="tab" aria-controls="Month" aria-selected="true">Monthly</a>
                        </li>
                        <li class="nav-item d-inline-block" role="presentation">
                            <a class="nav-link px-3 rounded-pill yearly" id="Yearly" data-bs-toggle="pill" href="#Year"
                                role="tab" aria-controls="Year" aria-selected="false" tabindex="-1">Yearly <span
                                    class="badge rounded-pill bg-success">10% Off </span></a>
                        </li>
                    </ul>

                    <div class="">
                        <div class="btn"
                            style="color: #003BB3; font-size: 18px; font-family: Poppins; font-weight: 500; line-height: 28px; word-wrap: break-word">
                            NGN</div>
                        <div class="btn"
                            style="color: #667085; font-size: 18px; font-family: Poppins; font-weight: 400; line-height: 28px; word-wrap: break-word">
                            USD</div>
                    </div>
                </div>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="Month" role="tabpanel" aria-labelledby="Monthly">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow  border-0 rounded">
                                    <div class="card-body">

                                        <h6 class="fw-bold text-uppercase mb-4">Basic Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2"></span>
                                            <span class="price h1 mb-0">
                                                <?php echo $monthly_plans['basic'] == 0 ? 'free' : number_format($monthly_plans['basic'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Electronically sign, notarise and share essential documents</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Identity
                                                verification - Verify identity with an ID number</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>3 free
                                                notes per month</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Advanced
                                                e-Signatures which are linked to your verified ID</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Schedule
                                                unlimited sessions with Nigerian notaries or commissioners for oaths
                                            </li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                knowledge center and online tutorials on how to use the platform</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                customer support via email and online chat</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>24 / 7 web
                                                access</li>
                                        </ul>

                                        <a href="<?php echo $get_started ?? ''; ?>"
                                            class=" btn btn-primary mt-4 w-100">Try It Now </a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">

                                    <div class="card-body">
                                        <h6 class="fw-bold text-uppercase mb-4">Pro Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">₦</span>
                                            <span class="price h1 mb-0">
                                                <?php echo $monthly_plans['pro_plan'] == 0 ? 'free' : number_format($monthly_plans['pro_plan'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Invite 10 team members to your workspace</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>
                                        <div style="width: 100%"><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Everything
                                                in </span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Basic</span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                plus....</span></div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>N5,000 per
                                                team member
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Invite 10
                                                team members to your workspace</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Sign and
                                                share up to 30 documents per team member monthly.</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Advanced e-Signatures which are linked to your verified ID
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Access to Notaries in Ghana, Kenya and the US via email
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Ministry Authentications (Ministry of Education & Ministry of foreign
                                                affairs) via email
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Set permissions for team members
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Sign documents collaboratively
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Access to a digital locker for you and your team members
                                            </li>
                                        </ul>
                                        <a href="<?php echo ($get_started); ?>" class="btn btn-primary mt-4 w-100">Sign
                                            up
                                            now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow  border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div
                                        style="width: 100%; height: 100%; padding-left: 8px; padding-right: 8px; padding-top: 12px; padding-bottom: 12px; background: #E5EBF7; justify-content: center; align-items: center; display: inline-flex">
                                        <div
                                            style="text-align: center; color: #003BB3; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 20px; word-wrap: break-word">
                                            Most popular plan</div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bold text-uppercase mb-4">Business Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">₦</span>
                                            <span class="price h1 mb-0">
                                                <?php echo $monthly_plans['business_plan'] == 0 ? 'free' : number_format($monthly_plans['business_plan'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/mo</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Close deals faster with advanced features + unlimited users.</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>
                                        <div style="width: 100%">
                                            <span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                Everything
                                                in </span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Basic
                                                and Pro</span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                plus....</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>N10,000 per
                                                user per month</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Invite an
                                                unlimited number of team members to your workspace</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Sign and
                                                share 60 documents per team member monthly.</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Schedule
                                                unlimited sessions with Nigerian notaries or commissioners for oaths
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                notary discounts</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to a
                                                dedicated customer success manager</li>

                                        </ul>
                                        <a href="<?php echo $get_started ?? ''; ?>"
                                            class=" btn btn-primary mt-4 w-100">Sign up now</a>


                                    </div>
                                </div>
                            </div><!--end col-->


                        </div><!--end row-->
                    </div>

                    <div class="tab-pane fade" id="Year" role="tabpanel" aria-labelledby="Yearly">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow  border-0 rounded">
                                    <div class="card-body">

                                        <h6 class="fw-bold text-uppercase mb-4">Basic Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2"></span>
                                            <span class="price h1 mb-0">
                                                <?php echo $annual_plans['basic'] == 0 ? 'free' : number_format($annual_plans['basic'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/yr</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Electronically sign, notarise and share essential documents</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Identity
                                                verification - Verify identity with an ID number</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>3 free
                                                notes per month</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Advanced
                                                e-Signatures which are linked to your verified ID</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Schedule
                                                unlimited sessions with Nigerian notaries or commissioners for oaths
                                            </li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                knowledge center and online tutorials on how to use the platform</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                customer support via email and online chat</li>
                                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>24 / 7 web
                                                access</li>
                                        </ul>

                                        <a href="<?php echo $get_started ?? ''; ?>"
                                            class="btn btn-primary mt-4 w-100">Try It
                                            Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow border-0 rounded">

                                    <div class="card-body">
                                        <h6 class="fw-bold text-uppercase mb-4">Pro Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">₦</span>
                                            <span class="price h1 mb-0">
                                                <!-- 54,000 -->

                                                <?php echo $annual_plans['pro_plan'] == 0 ? 'free' : number_format($annual_plans['pro_plan'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/yr</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Invite 10 team members to your workspace</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>
                                        <div style="width: 100%"><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">Everything
                                                in </span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Basic</span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                plus....</span></div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>N5,000 per
                                                team member
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Invite 10
                                                team members to your workspace</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Sign and
                                                share up to 30 documents per team member monthly.</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Advanced e-Signatures which are linked to your verified ID
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Access to Notaries in Ghana, Kenya and the US via email
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Ministry Authentications (Ministry of Education & Ministry of foreign
                                                affairs) via email
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Set permissions for team members
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Sign documents collaboratively
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>
                                                Access to a digital locker for you and your team members
                                            </li>
                                        </ul>
                                        <a href="<?php echo $get_started ?? ''; ?>"
                                            class=" btn btn-primary mt-4 w-100">Sign up now</a>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card pricing pricing-primary business-rate shadow  border-0 rounded">
                                    <div class="ribbon ribbon-right ribbon-warning overflow-hidden"><span
                                            class="text-center d-block shadow small h6">Best</span></div>
                                    <div
                                        style="width: 100%; height: 100%; padding-left: 8px; padding-right: 8px; padding-top: 12px; padding-bottom: 12px; background: #E5EBF7; justify-content: center; align-items: center; display: inline-flex">
                                        <div
                                            style="text-align: center; color: #003BB3; font-size: 14px; font-family: Inter; font-weight: 600; line-height: 20px; word-wrap: break-word">
                                            Most popular plan</div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="fw-bold text-uppercase mb-4">Business Plan</h6>
                                        <div class="d-flex mb-4">
                                            <span class="h4 mb-0 mt-2">₦</span>
                                            <span class="price h1 mb-0">
                                                <?php echo $annual_plans['business_plan'] == 0 ? 'free' : number_format($annual_plans['business_plan'], 2) ?>
                                            </span>
                                            <span class="h4 align-self-end mb-1">/yr</span>
                                        </div>

                                        <div
                                            style="width: 100%; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                            Close deals faster with advanced features + unlimited users.</div>
                                        <div class="my-3"
                                            style="width: 100%; color: #101828; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">
                                            FEATURES</div>
                                        <div style="width: 100%">
                                            <span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                Everything
                                                in </span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 600; line-height: 24px; word-wrap: break-word">Basic
                                                and Pro</span><span
                                                style="color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                plus....</span>
                                        </div>

                                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>N10,000 per
                                                user per month</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Invite an
                                                unlimited number of team members to your workspace</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Sign and
                                                share 60 documents per team member monthly.</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Schedule
                                                unlimited sessions with Nigerian notaries or commissioners for oaths
                                            </li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to
                                                notary discounts</li>
                                            <li class=" text-muted mb-3"><span class="icon h5 me-2"><i
                                                        class="uil uil-check-circle align-middle"></i></span>Access to a
                                                dedicated customer success manager</li>

                                        </ul>
                                        <a href="<?php echo $get_started ?? ''; ?>"
                                            class="btn btn-primary mt-4 w-100">Sign up now</a>


                                    </div>
                                </div>
                            </div><!--end col-->


                        </div><!--end row-->
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->


</section>

<section class="my-5">
    <div class="container bg-light py-5">
        <div
            style="width: 100%; text-align: center; color: black; font-size: 30px; font-family: Poppins; font-weight: 500; line-height: 38px; word-wrap: break-word">
            Session costs</div>
        <div
            style="width: 100%; text-align: center; color: #344054; font-size: 20px; font-family: Poppins; font-weight: 400; line-height: 30px; word-wrap: break-word">
            These costs will be charged repeatedly as you request sessions, seals and affidavits</div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="p-2">

                    <div class="card-body">
                        <h6 class="fw-bold text-uppercase mb-4">Basic Plan</h6>

                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N8,000 per
                                Document
                                uploaded for Notarisation</li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N50,000 per
                                Document
                                uploaded with monetary value for Notarisation</li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N8,000 per
                                Additional Seal.
                            </li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N 4,000 for
                                template
                                Affidavit
                            </li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N4,000 per
                                Affidavits Seal
                            </li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N20,000 Custom
                                Affidavits
                            </li>
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>
                                Custom Requests are available, <span
                                    style="color: #003BB3; font-size: 16px; font-family: Poppins; font-weight: 600; line-height: 24px; word-wrap: break-word">Contact
                                    us</span>
                            </li>

                        </ul>



                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="p-2">

                    <div class="card-body">
                        <h6 class="fw-bold text-uppercase mb-4">Pro Plan</h6>

                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N8,000 per
                                Document
                                uploaded for Notarisation</li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N50,000 per
                                Document
                                uploaded with monetary value for Notarisation</li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N8,000 per
                                Additional Seal.
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N 4,000 for
                                template
                                Affidavit
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N4,000 per
                                Affidavits Seal
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N20,000 Custom
                                Affidavits
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>
                                Custom Requests are available, <span
                                    style="color: #003BB3; font-size: 16px; font-family: Poppins; font-weight: 600; line-height: 24px; word-wrap: break-word">Contact
                                    us</span>
                            </li>

                        </ul>



                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                <div class="p-2">

                    <div class="card-body">
                        <h6 class="fw-bold text-uppercase mb-4">Business Plan</h6>

                        <ul class="list-unstyled mb-0 ps-0 mt-3">
                            <li class="text-primary text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N7,200 per
                                Document
                                uploaded for Notarisation</li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N50,000 per
                                Document
                                uploaded with monetary value for Notarisation</li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N7,200 per
                                Additional Seal.
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N 3,600 for
                                template
                                Affidavit
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N3,600 per
                                Affidavits Seal
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>N18,000 Custom
                                Affidavits
                            </li>
                            <li class="text-muted mb-3"><span class="icon h5 me-2"><i
                                        class="text-primary uil uil-check-circle align-middle"></i></span>
                                Custom Requests are available, <span
                                    style="color: #003BB3; font-size: 16px; font-family: Poppins; font-weight: 600; line-height: 24px; word-wrap: break-word">Contact
                                    us</span>
                            </li>

                        </ul>



                    </div>
                </div>
            </div><!--end col-->
        </div>
    </div>

    <div class="container py-5">
        <div
            style="width: 100%; height: 100%; padding-top: 4px; padding-bottom: 4px; padding-left: 4px; padding-right: 10px; mix-blend-mode: multiply; background: #FFFAEB; border-radius: 16px; justify-content: flex-start; align-items: center; gap: 12px; display: inline-flex">
            <div
                style="padding-top: 4px; padding-bottom: 4px; padding-left: 10px; padding-right: 12px; background: white; border-radius: 16px; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                <div style="width: 12px; height: 12px; position: relative">
                    <div
                        style="width: 10px; height: 10px; left: 1px; top: 1px; position: absolute; border: 1.50px #B54708 solid">
                    </div>
                </div>
                <div
                    style="text-align: center; color: #B54708; font-size: 14px; font-family: Poppins; font-weight: 500; line-height: 20px; word-wrap: break-word">
                    Please Note</div>
            </div>
            <div style="justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                <div
                    style="color: #B54708; font-size: 14px; font-family: Poppins; font-weight: 400; line-height: 20px; word-wrap: break-word">
                    session costs are not included in subscription payment</div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>