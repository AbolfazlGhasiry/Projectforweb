<?php
include("header.html");

$videos = [
    "https://caspian19.cdn.asset.aparat.com/aparat-video/0368fb28cf9f1ea09841772e4116b94d63622610-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImNiYWQyNTc3YmJlNDViODlkMWFlYzk2M2VkZjM0ZDQ0IiwiZXhwIjoxNzY3ODk5Mzg2LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.nA8MTjzzjfBwviwbCukV1maS7ulZApaRpFeZ7LE2fjw",
    "https://persian20.cdn.asset.aparat.com/aparat-video/493dcafc4760a4a8c5a8fe319028cdbe63723357-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjlkNzEyMTk4M2ZkN2MzNDRjM2MzMmNjODdkMTA2MDc3IiwiZXhwIjoxNzY3ODk5NDMzLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.NXnzUIF6IHiPJtpbULPYAWblFNaVia0dmpwhKM-NuHk",
    "https://caspian6.cdn.asset.aparat.com/aparat-video/1198d22af8da828792d8cecf5b7d41fa64133756-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImU3MGM0ZWIzYTJkMDg4Y2Y4ZTM0Nzk0MDE2MDdkNGFkIiwiZXhwIjoxNzY3ODk5NDgxLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.LlYdYSmXPbiFk51-EVKowEqdw_P6vl7Y2HBBej1cYP8",
    "https://persian15.cdn.asset.aparat.com/aparat-video/c7f61d39f319c2e40c6f1bbbd5f9ef3657137084-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjJhYTJjN2U1M2E2YTdjNDkwMmNjMGZiNDUxMWVlODYxIiwiZXhwIjoxNzY3ODk5NTMxLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.jUvpu8o-ZEq429gqZM-0q-FjlTP1NQdKV3bS_Z5RP4Q",
    "https://persian19.cdn.asset.aparat.com/aparat-video/17c404ba5ca8a1803365011415cb3f0863158650-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjUzYTA1YmM1YzVkYmZhMDA0OGZkODAxZDNiZjNkODM4IiwiZXhwIjoxNzY3ODk5NjAzLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.qeRioQNQYWrOG5-eX9uh4b70LR19a7EPwfwxkvHPNGM",
    "https://persian4.cdn.asset.aparat.com/aparat-video/fafd2bcb7663ae7cb3eba4140946ab2864469650-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjA2MjhkZDcxNTAwZGIyNGQwZWRjOGZjNjExYzJiMTU2IiwiZXhwIjoxNzY3ODk5NjMyLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.KXLjWuSBoy2HhWmSxnnMcZEIqQkPQZ6hNV13eiPB2PA",
    "https://caspian24.cdn.asset.aparat.com/aparat-video/5d76bd198b102efd0ca1bbd0bb2380fc66952785-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjRjMzhjZjA3N2IzNzRjOWFmODc4OWJlY2ZmMzUzYjkyIiwiZXhwIjoxNzY3ODk5NjgyLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.mIgqgZlHrgxJ7QSK8Ji2QBJBY1oktj6MVqHT6Tke7uQ",
    "https://caspian23.cdn.asset.aparat.com/aparat-video/3d6d6124be23333c2ce66716ae9bb8d766390548-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6Ijc4NGNmZDQxMTVhYjRlZDAwMDIxYTIwYmJhMjVlOTE4IiwiZXhwIjoxNzY3ODk5NzE0LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.jOB3duJMdQ9Y9T7LhgtOw1FPJ0jICoWXG1CwA1eBgpg",
    "https://persian6.cdn.asset.aparat.com/aparat-video/d6f956ea721c50b30ebf45ed8ba5e1f952014119-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImIwNmY1MWJjNDNjNzM1NTZjMWE4YmQwNzY3ZTA5NDhiIiwiZXhwIjoxNzY3ODk5Nzg3LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.YJ3sbJhafe8T_azYUrhTAvK5Jmmr3R0VQJYeUHviVOw",
    "https://persian20.cdn.asset.aparat.com/aparat-video/320e6c0da8106730de28ba63c3ac4b9163363806-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjhmMzg0Y2MwZTVkZWIyMjE1OWEyY2M3NTk3MjM5YmNiIiwiZXhwIjoxNzY3ODk5ODc5LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.KO4OPdvbuVCYZpP5wxfbLAyHr2fG7wzGm1k2DirhrGo",
    "https://caspian16.cdn.asset.aparat.com/aparat-video/a799fcad704c995bbb679ac68a5fa35d63242100-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjAzNjRlM2EwZThhMzRlZWQxNGFiNzcxMDAxZWY1ZjY4IiwiZXhwIjoxNzY3ODk5OTI2LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.vkqczCMABvDASK_U-EaVGWxQx1SHoHHLJt4j_QPaEbw",
    "https://caspian25.cdn.asset.aparat.com/aparat-video/2b34b02b9c9679f28dbd802b5a43b13f67385515-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6Ijg0YzAxMTE2ZWQ4MWZjYzQ5YTRjM2Q1ZmI5YWFkNzU2IiwiZXhwIjoxNzY3ODk5OTQ1LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.-4c7Qs14Tz1K-blUhe7h9vURmszsnbfb0LUXw4WGUOs",
    "https://persian11.cdn.asset.aparat.com/aparat-video/7c6306fec24036040b1516d68957672d58059554-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImI1ZDBhOTQzODA2MTNhYWFkODMyNzMzNTZmNTg5MTgxIiwiZXhwIjoxNzY3ODk5OTQ5LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.OK-kl95L3C6DEuL_WPTr-GHc7t3ed4x4cTb9_V1S_ks",
    "https://caspian13.cdn.asset.aparat.com/aparat-video/b88c568fbc5ce4c4f272f31adeb6d24258074323-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImUzZmMzNmEzZjQzNmRiZWY0NDBkMjFhYmEyY2E5Mzg5IiwiZXhwIjoxNzY3ODk5OTU0LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.yXZqyl78jz4cHwlLp2R5U-HmIuOXgrDsep6lgsibliI",
    "https://caspian19.cdn.asset.aparat.com/aparat-video/49bbe3591f7f234fbfb0ab536ebe904561425463-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImM2Y2Y5MTk1ODA1YzA2N2E2MjhiYjkwNDIxZDU0NDk2IiwiZXhwIjoxNzY3ODk5OTU4LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.RRPlCyOi3xXgOMIpO0dzQwrXgrAi7fDp3Y-DpN6wAus",
    "https://persian18.cdn.asset.aparat.com/aparat-video/92e08b9fbef42febbbcbfb22d23e857b62116861-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjI2YTU1OTZjYjNhZmJmMTAzM2NiYWU5ZTMyMWY0ZDhlIiwiZXhwIjoxNzY3ODk5OTYwLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.QVwTRYq4DO-VztfSc2_h6ZNX0dtQmwIPup4Md4xH_dQ",
    "https://aspb32.cdn.asset.aparat.com/aparat-video/1201bcf69e103b6f9da6e8c6b26e9f1a34376541-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6Ijg5ZTNiYzMxNmYxYWQ3NzBhNDI1YjliZTNiNDRmN2IxIiwiZXhwIjoxNzY3ODk5OTYzLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.hQuzgGA2hz8xsnIuY38GqwCL-N53-InTupsNORB7Mmw",
    "https://aspb31.cdn.asset.aparat.com/aparat-video/cf4bc8bee4a5e964367c879bf9340d8740406849-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjllMWFlMmQ3ZWM4OTgxNDQ0OWY0ZjQ3MTg5ZTczNzI1IiwiZXhwIjoxNzY3ODk5OTY5LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.fOWgFurcHiiJXNDkCSJZrR3U5z5h8ciUz2Sk1XUNWd0",
    "https://persian11.cdn.asset.aparat.com/aparat-video/5015b78d169771db031ebb91014ebb5b58250563-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjA2MDdiNjAyMTBiYzA2YTA1YmZlNWRmMzI3ZjgzZjBkIiwiZXhwIjoxNzY3ODk5OTczLCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.QHIIg5P7dEDupIM5LDcflTf2HukniTMMEjVx0axOwIs",
    "https://aspb33.cdn.asset.aparat.com/aparat-video/e48f57840253391f03b86efefe1d1c0934849330-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IjQwNzQ2Y2JmMjE5YzMyOWU1ZGNiNDVmMzU2Y2M1NzZlIiwiZXhwIjoxNzY3ODk5OTc5LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.qyipzU9eUY-k8m95f0QonVozECvul1WBJBr_b5O66M4",
    "https://caspian22.cdn.asset.aparat.com/aparat-video/ac1f8a301ced79c566519dd97738d81466874501-720p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImI2YWM0NjIwM2IzMGJiMDExZDc5ZDIxNTI5YmNlMmEwIiwiZXhwIjoxNzY3ODk5OTg0LCJpc3MiOiJTYWJhIElkZWEgR1NJRyJ9.VAjhEh3FFKhO9WrekEzc6QGJW4gJjZ5wgWOTz6I3Wfg"
];
?>
<main>
    <div class="video-grid">
        <?php foreach($videos as $index => $video): ?>
            <div class="video-box">
                <iframe width="320" height="240" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
                <h3>ویدیو شماره <?php echo $index+1; ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
</main>