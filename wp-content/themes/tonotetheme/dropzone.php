<style>
    .dropzone-wrapper {
        width: 100%;
        height: 100%;
        padding: 10px;
        background: white;
        border-radius: 12px;
        border: 1px #003BB3 dotted;
        justify-content: center;
        align-items: center;
        gap: 10px;
        display: inline-flex
    }
</style>
<div class="dropzone-wrapper py-5">
    <div
        style="width: 100%; height: 100%; flex-direction: column; justify-content: center; align-items: center; gap: 24px; display: inline-flex">
        <div style="width: 60px; height: 60px; position: relative">
            <!-- <div
                style="width: 43.69px; height: 43.75px; left: 8.12px; top: 8.13px; position: absolute; background: #9AA2B4">
            </div>
            <div
                style="width: 3.75px; height: 31.25px; left: 28.12px; top: 8.12px; position: absolute; background: #9AA2B4">
            </div> -->
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/prime_upload.png" />
        </div>
        <div
            style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 12px; display: flex">
            <div
                style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 24px; display: flex">
                <div
                    style="width: 247px; text-align: center; color: #18181B; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 26px; word-wrap: break-word">
                    Drag and drop document here</div>

                <div class=""
                    style=" padding-left: 24px; padding-right: 24px; padding-top: 16px; padding-bottom: 16px; background: #003BB3; border-radius: 8px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: flex">
                    <div style="justify-content: center; align-items: center; gap: 9px; display: inline-flex">
                        <div class="btn btn-primary">
                            Upload Document and Sign</div>
                    </div>
                </div>
            </div>

        </div>
        <div class=""
            style="text-align: center; color: #67748E; font-size: 14px; font-family: Poppins; font-weight: 400; line-height: 24px; word-wrap: break-word">
            Maximum size: 2MB
        </div>
    </div>
</div>