<div class="col-md-3">
    <aside class="sidebar">
        <div id="combinationFilters" class="filters">

            <h4 class="mt-xl mb-md">Ürünler</h4>
            <div  class="divider divider-primary divider-small mb-xl">
                <hr style="background-color: #2A3F54 !important   ;">
            </div>

            <ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group1">
                <li data-option-value="" class="active"><a href="#">Termal Güvenlik Kameraları</a></li>
                <li data-option-value=".criminal-law"><a href="#">CCTV Kameraları</a></li>
                <li data-option-value=".business-law"><a href="#">Marine Termal Kameralar</a></li>
                <li data-option-value=".divorce-law"><a href="#">Trafik Sistemleri</a></li>
                <li data-option-value=".health-law"><a href="#">Radarlar</a></li>
                <li data-option-value=".capital-law"><a href="#">Drone</a></li>
            </ul>

            <h4 class="mt-xl mb-md">Konum</h4>
            <div  class="divider divider-primary divider-small mb-xl">
                <hr style="background-color: #2A3F54 !important   ;">
            </div>
            <ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group2">
                <li data-option-value="" class="active"><a href="#">Amerika</a></li>
                <li data-option-value=".new-york"><a href="#">Türkiye</a></li>
                
            </ul>

        </div>

        <h4 class="mt-xl mb-md">İletişim</h4>
        <div  class="divider divider-primary divider-small mb-xl">
            <hr style="background-color: #2A3F54 !important   ;">
        </div>
        <p>Bize ulaşmak için aşağıda yer alan iletişim formunu eksiksizce doldurarak gönderebilirsiniz.</p>

        

        <form id="contactForm" action="php/contact-form.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Adınız *</label>
                        <input style="border-radius: 10px;" type="text" value="" data-msg-required="Please enter your name."
                        maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Mail Adresiniz *</label>
                        <input style="border-radius: 10px;" type="email" value=""
                        data-msg-required="Please enter your email address."
                        data-msg-email="Please enter a valid email address." maxlength="100"
                        class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Konu</label>
                        <input style="border-radius: 10px;" type="text" value="" data-msg-required="Please enter the subject."
                        maxlength="100" class="form-control" name="subject" id="subject"
                        required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <label>Mesaj *</label>
                        <textarea style="border-radius: 10px;" maxlength="5000" data-msg-required="Please enter your message."
                        rows="3"
                        class="form-control" name="message" id="message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input style="background-color: #2A3F54 !important; color: white    !important;border-radius: 10px;" type="submit" value="Mesajı Gönder" class="btn btn-primary"
                    data-loading-text="Loading...">

                    <div class="alert alert-success hidden" id="contactSuccess">
                        Mesaj gönderildi.
                    </div>

                    <div class="alert alert-danger hidden" id="contactError">
                        Mesaj gönderilirirken hata oluştu.
                    </div>
                </div>
            </div>
        </form>

    </aside>
</div>