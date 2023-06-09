<section id="kontak" class="contact">
    <div class="contact-area">
        <div class="contact-header">
            <h2>Kirim <strong>Pesan</strong></h2>
            <p>Jika Ada Kritik, Saran Dan Informasi Yang Berkaitan Dengan PPLG Kalian BIsa Merngirim Pesan</p>
        </div>
        <form class="contact-body" action="kirim-email" method="post">
            @csrf
            <div class="input-contact-1">
                <label>Nama Kamu</label>
                <input type="text" name="name">
            </div>					
            <div class="input-contact-2">
                <label>Email Kamu</label>
                <input type="email" name="email">
            </div>					
            <div class="input-textarea">
                <label>Pesan</label>
                <textarea name="pesan"></textarea>
            </div>
            <button>Submit</button>
        </form>
    </div>
</section>