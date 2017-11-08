<!-- Stored in resources/views/child.blade.php -->
@extends('layouts.sablon')

@section('title', 'Admin Panel')

@section('glavni_sadrzaj')
    @parent
    <ul class="nav nav-tabs">
        <li id="kat" role="presentation" style="cursor: pointer;" class="aktivno"><a onclick="kategorijeActiveTab()">Kategorije</a>
        </li>
        <li id="mod" role="presentation" style="cursor: pointer;"><a onclick="moderatoriActiveTab()">Testovi</a></li>
         <li id="edi" role="presentation" style="cursor: pointer;"><a onclick="editActiveTab()"><span class="glyphicon glyphicon-edit donja-margina" aria-hidden="true"></span></a></li>
        <li id="pls" role="presentation" style="cursor: pointer; display: none;"><a onclick="addActiveTab()"><span class="glyphicon glyphicon-plus donja-margina" aria-hidden="true"></span></a></li>
    </ul>
    <div id="ListaKat" class=" results adminlist">
        <?php
        use App\Http\Controllers\AdminController2;
        AdminController2::load();
        AdminController2::printCategories();
        ?>
    </div>
    <div id="ListaMod" class=" results adminlist" style="display: none;">
        <?php
        AdminController2::printModerators();
        ?>
    </div>
    <!-- The Modal za dodavanje moderatora-->
    <div id="modModal" class="modal" style="display: none;">
        <!-- Modal content -->
        <form name="Ime" action="admin/InsertMod" method="POST" class="modal-content">
            {{csrf_field()}}

            <span class="close" onclick="addInActiveTab()">&times;</span>
            <div class="container donja-margina gornja-margina">
                <input name="ime" type="text" value="" placeholder="Ime moderatora"/>
                <button type="submit" class="btn btn-success">Dodaj</button>
            </div>
        </form>
    </div>
    <!-- The Modal za dodavanje kategorije-->
    <div id="katModal" class="modal" style="display: none;">
        <!-- Modal content -->
        <form name="Ime" action="admin/InsertKat" method="POST" class="modal-content">
            {{csrf_field()}}
            <span class="close" onclick="addInActiveTab()">&times;</span>
            <div class="container donja-margina gornja-margina">
                <input name="ime" type="text" value="" placeholder="Ime kategorije"/>
                <button type="submit" class="btn btn-success">Dodaj</button>
            </div>
        </form>
    </div>
    <!-- The Modal za menjanje kategorije-->
    <div id="kateModal" class="modal" style="display: none;">
        <!-- Modal content -->
        <form id="editModal" name="Ime" method="POST" class="modal-content">
            {{csrf_field()}}
            <span class="close" onclick="closekateModal()">&times;</span>
            <div class="container donja-margina gornja-margina">
                <input id="imek" name="ime" type="text" value="" placeholder="Ime kategorije"/>
                <ul style=" display: none;" id="listamod" style="list-style-type: none; margin-left: -25px;">
                </ul>
                <button type="submit" class="btn btn-info">Izmeni</button>
            </div>
        </form>
    </div>
@endsection
<script>
    function moderatoriActiveTab()
    {
        document.getElementById('kat').classList.remove('aktivno');
        document.getElementById('mod').classList.add('aktivno');
        document.getElementById('ListaKat').style.display = 'none';
        document.getElementById('ListaMod').style.display = 'block';
    }
    function kategorijeActiveTab()
    {
        document.getElementById('kat').classList.add('aktivno');
        document.getElementById('mod').classList.remove('aktivno');
        document.getElementById('ListaMod').style.display = 'none';
        document.getElementById('ListaKat').style.display = 'block';
    }
    function editActiveTab()
    {
        if (document.getElementById('edi').classList.contains('aktivno'))//gasenje edit dugmica
        {
            document.getElementById('edi').classList.remove('aktivno');
            document.getElementById('pls').style.display = 'none';
            var elements = document.getElementsByClassName('editx');
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = "none";
            }
        }
        else                                                            //aktiviranje edit dugmica
        {
            document.getElementById('edi').classList.add('aktivno');
            document.getElementById('pls').style.display = 'block';
            var elements = document.getElementsByClassName('editx');
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = "inline";
            }
        }
    }
    function addActiveTab()
    {
        if (document.getElementById('kat').classList.contains('aktivno'))
        {
            document.getElementById('katModal').style.display = 'block';
            document.getElementById('pls').classList.add('aktivno');
        }
        if (document.getElementById('mod').classList.contains('aktivno'))
        {
            // similar behavior as an HTTP redirect
            window.location.replace("dodaj_oglas2");
        }
    }
    function addInActiveTab()
    {
        if (document.getElementById('kat').classList.contains('aktivno'))
        {
            document.getElementById('katModal').style.display = 'none';
            document.getElementById('pls').classList.remove('aktivno');
        }
        if (document.getElementById('mod').classList.contains('aktivno'))
        {
            document.getElementById('modModal').style.display = 'none';
            document.getElementById('pls').classList.remove('aktivno');
        }
    }
    function closekateModal()
    {
        document.getElementById('kateModal').style.display = 'none';
    }
    function submituj(ovo)
    {
        ovo.submit();
    }
    function Menjanje(ovo, katmod)
    {
        if(katmod) document.getElementById("editModal").setAttribute('action', "admin/EditMod");//0=kat 1=mod za menjanje action okolne forme modala
        else document.getElementById("editModal").setAttribute('action', "admin/EditKat");
        var read = ovo.parentElement.parentElement.innerHTML;
        var skid = read.split("skriveniid");            //id kategorije
        var ime = read.split("[");                      //ime kategorije
        var mods;                                       //moderatori kategorije
        ime = ime[0];
        skid = skid[1].split("\"");
        skid = skid[2];
        mods = read.split("<form");
        mods = mods[0].split("\">");
        mods = mods[1].split(";"); //niz moderatora duzine br. mod + 1 zbog \0
        document.getElementById("kateModal").style.display = 'block';
        document.getElementById("imek").value = ime;
        var lista = document.getElementById("listamod");
        lista.innerHTML = ''; //praznjenje prethodne liste moderatora
        for(var i = 0; i<mods.length - 1; i++)
        {
            var li = document.createElement("li");
            var md = document.createElement("input");
            var iks = document.createElement("span");
            iks.setAttribute('class', 'glyphicon glyphicon-remove promeni');
            iks.setAttribute('onclick', 'Izbaci(this)');
            md.setAttribute('type', 'text');
            md.setAttribute('name', 'moderator' + i);
            md.setAttribute('value', mods[i]);
            li.appendChild(iks);
            li.appendChild(md);
            lista.appendChild(li);
        }
        var plus = document.createElement("span");
        plus.setAttribute('class', 'glyphicon glyphicon-plus promeni');
        plus.setAttribute('onclick', 'Dodaj(this)');
        lista.appendChild(plus);//dodavanje + za dodavanje moderatora
        var skriveno = document.createElement("input");
        skriveno.setAttribute('value', skid);
        skriveno.setAttribute('style', 'display: none;');
        skriveno.setAttribute('name', 'skriveno');
        lista.appendChild(skriveno);
    }
    function Izbaci(ovo)
    {
        ovo.parentElement.remove(0);
    }
    function Dodaj(ovo)
    {
        var li = document.createElement("li");
        var md = document.createElement("input");
        var iks = document.createElement("span");
        var broj = document.getElementById("listamod").getElementsByTagName("li").length;
        iks.setAttribute('class', 'glyphicon glyphicon-remove promeni');
        iks.setAttribute('onclick', 'IzbaciMod(this)');
        md.setAttribute('type', 'text');
        md.setAttribute('name', 'moderator' + broj);
        broj ++;
        li.appendChild(iks);
        li.appendChild(md);
        var plus = document.createElement("span");
        plus.setAttribute('class', 'glyphicon glyphicon-plus promeni');
        plus.setAttribute('onclick', 'Dodaj(this)');
        ovo.parentElement.appendChild(li);
        ovo.parentElement.appendChild(plus);
        ovo.remove();
    }
</script>