<div id="form">
    
    <form action="/?action=convert" method="POST">
        <textarea name="text" placeholder="Wpisz ciąg cyfr oddzielony przecinkami lub jakiś tekst"></textarea>
        <div class="radio">
            <span><input type="radio" name="type" value="toString" checked><label for="toString">Chcę Zamienić na tekst<span class="red">*</span></label></span>
            <span><input type="radio" name="type" value="toNumeric"><label for="toNumeric">Chcę Zamienić na liczby</label></span>
            <p class="instruction"><span class="red">*</span> - w przypadku konwersji na tekst, liczby należy oddzielić przecinkami np. 2,55,2</p>
        </div>
        <input type="submit" value="Konwertuj!">
    </form>
</div>