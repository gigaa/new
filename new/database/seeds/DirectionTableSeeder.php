<?php

use Illuminate\Database\Seeder;

class DirectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directions')->insert([
        ['id' => 1,'content_ka'=>'<div class="container">
        <div class="section-heading center-holder">
            <span>დისტანციური აუთსორს შესყიდვების სერვისი (ROPS)</span>
            <h3>ძირითადი მიმართულებები</h3>
            <div class="section-heading-line"></div>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-target"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>ნებისმიერი შესყიდვის ობიექტის (საქონელი, მომსახურება, სამშენებლო სამუშაო) ტექნიკური
                                პარამეტრების განსაზღვრა</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-search"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>ბაზრის კვლევის წინამოსამზადებელი სამუშაოების ჩატარება, დოკუმენტაციის მომზადება და პოტენციური
                                მომწოდებლების მოძიება</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class="icon-file"></i>
                        </div>
                        <div class="feature-flex-square-content">
    
                            <p>ხელშეკრულების პირობების შესრულების მონიტორინგი და შესყიდვის პროცესში საჭირო სხვადასხვა
                                პროცედურების წარმართვა</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/win.png"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>გამარჯვებულის გამოვლენა და მასთან სხვადასხვა პირობების დაზუსტება</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/gamotstileba.png"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>ხელშეკრულების მომზადება გამარჯვებულ პრეტენდენტთან და შეკვეთის მიცემა</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/logistic.png"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>იმპორტის შემთხევაში საუკეთესო პირობის მქონე ლოჯისტიკური სერვისის მოძიება</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/sabajo.png"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>საჭიროების შემთხევავაში საქონლის ტრანსპორტირების და საბაჟო პროცედურების ორგანიზება</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/look.png"></i>
                        </div>
                        <div class="feature-flex-square-content">
                            <p>საქონლის მიღება და პირველადი გარეგანი დათვალიერება</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-12">
                <div class="feature-flex-square">
                    <div class="clearfix">
                        <div class="feature-flex-square-icon">
                            <i class=""><img src="front/img/market.png"></i>
                        </div>
                        <div class="feature-flex-square-content" id="advantages">
                            <p>ბაზრის კვლევის ორგანიზება, მიღებული წინადადებების შეფასება</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>','content_en' => 'http://www.wissol.ge',],
        ]);
    }
}
