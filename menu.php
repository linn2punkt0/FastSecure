<style>
.menu{
    width: 100vw;
    height: 100vh;
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
}
nav{
    height: 56pt;
    width: 100vw;
    margin: 0;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
nav button{
    width: 24pt;
}
nav .extra {
    width: 24pt;
}
.shortcuts{
    display:flex;
    flex-direction: column;
    align-items: center;
    font-size: 14pt;

}
.shortcuts a{
    margin: 0 0 40pt 0;
    color: white;
}
.lang {
    display: flex;
    flex-direction: row;
}
.lang button{
    width: 50vw;
    height: 93px;
    margin: 0;
    color: white;
    background-color: black;
    border: solid 1px grey;

    }
</style>
<div class="menu">
    <nav>
        <div class="extra"></div>
        <img src="" alt="logo">
        <form action="index.php" method="get">
            <button type="submit" name="page" value="index"><img src="" alt="exit"></button>
        </form>
    </nav>
    <div class="shortcuts">
        <a href=""><?=trans('home','title')?></a>
        <a href=""><?=trans('performance','title')?></a>
        <a href=""><?=trans('exclusivity','title')?></a>
        <a href=""><?=trans('merchandise','title')?></a>
        <a href=""><?=trans('companyContact','contact')?></a>
    </div>
    <form class="lang" action="index.php" method="get">
        <button type="submit" name="lang" value="sv">SWEDISH</button>
        <button type="submit" name="lang" value="en">ENGLISH</button>
    </form>
</div>
