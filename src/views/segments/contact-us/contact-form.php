<div class="container space-1">
    <!-- Title -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="btn btn-xs btn-soft-success btn-pill mb-2">Leave a Message</span>
        <h2 class="text-primary font-weight-normal">Tell us about <span class="font-weight-semi-bold">yourself</span></h2>
        <p>Whether you have questions or you would<br>just like to say hello, contact us.</p>
    </div>
    <!-- End Title -->

    <div class="w-lg-80 mx-auto">
        <!-- Contacts Form -->
        <form class="js-validate" novalidate="novalidate">
            <div class="row">
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <label class="form-label">
                            Your name
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" name="name" placeholder="Phoenix Aspacio" aria-label="Phoenix Aspacio"
                            required="" data-msg="Please enter your name." data-error-class="u-has-error"
                            data-success-class="u-has-success">
                    </div>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <label class="form-label">
                            Your email address
                            <span class="text-danger">*</span>
                        </label>

                        <input type="email" class="form-control" name="email" placeholder="phoenix.aspacio@example.com"
                            aria-label="phoenix.aspacio@example.com" required="" data-msg="Please enter a valid email address."
                            data-error-class="u-has-error" data-success-class="u-has-success">
                    </div>
                </div>
                <!-- End Input -->

                <div class="w-100"></div>

                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <label class="form-label">
                            Subject
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text" class="form-control" name="subject" placeholder="Product Inquiry" aria-label="Product Inquiry"
                            required="" data-msg="Please enter a subject." data-error-class="u-has-error"
                            data-success-class="u-has-success">
                    </div>
                </div>
                <!-- End Input -->

                <!-- Input -->
                <div class="col-sm-6 mb-6">
                    <div class="js-form-message">
                        <label class="form-label">
                            Your Phone Number
                            <span class="text-danger">*</span>
                        </label>

                        <input type="number" class="form-control" name="phone" placeholder="+1-202-555-0129" aria-label="+1-202-555-0129"
                            required="" data-msg="Please enter a valid phone number." data-error-class="u-has-error"
                            data-success-class="u-has-success">
                    </div>
                </div>
                <!-- End Input -->
            </div>

            <!-- Input -->
            <div class="js-form-message mb-6">
                <label class="form-label">
                    How can we help you?
                    <span class="text-danger">*</span>
                </label>

                <div class="input-group">
                    <textarea class="form-control" rows="4" name="text" placeholder="Hi there, I would like to ..."
                        aria-label="Hi there, I would like to ..." required="" data-msg="Please enter a reason."
                        data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                </div>
            </div>
            <!-- End Input -->

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
                <p class="small">We'll get back to you in 1-2 business days.</p>
            </div>
        </form>
        <!-- End Contacts Form -->
    </div>
</div>