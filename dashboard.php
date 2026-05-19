<?php include_once "./layouts/dash_header.php"; ?>

<main class="p-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="form-card p-4">
                    <h3 class="headers">Update Banner Section</h3>
                    
                    <form action="./controller/banner_link.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="job_type">Job Type</label>
                                <input type="text" name="job_type" id="job_type" placeholder="Freelance">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" placeholder="Full Stack Developer">
                            </div>

                            <div class="col-md-6">
                                <label for="moto">Moto part-1</label>
                                <input type="text" name="moto" id="moto" placeholder="Laravel">
                            </div>

                            <div class="col-md-6">
                                <label for="motos">Moto part-2</label>
                                <input type="text" name="motos" id="motos" placeholder="Architect">
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label for="short_desc">Short Description</label>
                                <textarea name="short_desc" id="short_desc" rows="3" placeholder="Crafting high-performance web applications with Laravel, PHP, and modern JavaScript frameworks. Turning complex problems into elegant solutions."></textarea>
                            </div>

                            <!-- CTA & Link -->
                            <div class="col-md-6">
                                <label for="cta">CTA</label>
                                <input type="text" name="cta" id="cta" placeholder="View My Work">
                            </div>
                            <div class="col-md-6">
                                <label for="cta_link">CTA Link (URL)</label>
                                <input type="url" name="cta_link" id="cta_link" placeholder="https://www.foyjurrafee.dev">
                            </div>

                            <!-- Stats (Experience, Projects, Clients) -->
                            <div class="col-md-4">
                                <label for="experience">Years of Experience</label>
                                <input type="text" name="experience" id="experience" placeholder="2+">
                            </div>
                            <div class="col-md-4">
                                <label for="projects">Projects</label>
                                <input type="text" name="projects" id="projects" placeholder="50+">
                            </div>
                            <div class="col-md-4">
                                <label for="clients">Happy Clients</label>
                                <input type="text" name="clients" id="clients" placeholder="30+">
                            </div>

                            <!-- Files (CV & Image) -->
                            <div class="col-md-6">
                                <label for="cv">Upload CV</label>
                                <input type="file" name="cv" id="cv" class="hidden-input">
                                <label for="image" class="custom-file-box"><span class="plus-icon"><i class="bi bi-plus-lg"></i></span></label>
                                <span class="text-danger"><?= $_SESSION['form_errors']['cv_error'] ?? null ?></span>
                            </div>
                            <div class="col-md-6">
                                <label for="image">Profile Image</label>
                                <input type="file" name="image" id="image">
                                <label for="image" class="custom-file-box"><span class="plus-icon"><i class="bi bi-plus-lg"></i></span></label>
                                <span class="text-danger"><?= $_SESSION['form_errors']['image_error'] ?? null ?></span>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" class="btn_primary px-5 py-3 w-100" style="background: var(--btn-gradient); border: none;">Save Changes <iconify-icon icon="mingcute:check-line" width="24" height="24"></iconify-icon></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
include_once "./layouts/dash_footer.php";