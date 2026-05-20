<?php
include_once "./layouts/dash_header.php";
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="form-card p-4">
                    <h3 class="headers">Update About Section</h3>
                    
                    <form action="./controller/about_link.php" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="title1">Title 1</label>
                                <input type="text" name="title_1" id="title_1" placeholder="Crafting Digital">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="title2">Title 2</label>
                                <input type="text" name="title_2" id="title_2" placeholder="Experiences">
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label for="paragraph_1">Description Paragraph 1</label>
                                <textarea name="paragraph_1" id="paragraph_1" rows="3" placeholder="I'm a passionate full-stack developer specializing in Laravel and modern web technologies. With years of experience building scalable applications, I transform complex problems into elegant, user-friendly solutions."></textarea>
                            </div>

                            <div class="col-12">
                                <label for="paragraph_2">Description Paragraph 2</label>
                                <textarea name="paragraph_2" id="paragraph_2" rows="3" placeholder="My journey in web development started with a curiosity about how things work on the internet, and it has evolved into a career where I get to create meaningful digital experiences every day. I believe in writing clean, maintainable code and staying up-to-date with the latest industry trends."></textarea>
                            </div>
                            <div class="col-12">
                                <label for="paragraph_3">Description Paragraph 3</label>
                                <textarea name="paragraph_3" id="paragraph_3" rows="3" placeholder="When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or sharing knowledge with the developer community. I'm always excited to take on new challenges and collaborate on innovative projects."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
include_once "./layouts/dash_footer.php";