<%@ Page Title="" Language="C#" MasterPageFile="~/Site1.Master" AutoEventWireup="true" CodeBehind="Strona-Glowna.aspx.cs" Inherits="Restauracja.Strona_Glowna" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div class="strona-glowna">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="Photo/galeria/pexels-brett-sayles-1322184.jpg" class="d-block w-100" alt="Zdjecie"/>
            </div>
            <div class="carousel-item">
              <img src="Photo/istockphoto-950249656-1024x1024.jpg" class="d-block w-100" alt="Zdjecie"/>
            </div>
            <div class="carousel-item">
              <img src="Photo/pexels-on-shot-2788792.jpg" class="d-block w-100" alt="Zdjecie"/>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    <div class="menu">
        <h2 class="head-menu" id="menu">Menu</h2>
        <h3 class="title-menu">Makarony</h3>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="Photo/jedzenie/istockphoto-527439685-1024x1024.jpg" class="card-img-top" alt="Zdjecie bolonese"/>
                      <div class="card-body">
                        <h5 class="card-title">Spaghetti Bolognese</h5>
                        <p class="card-text">Sos bolognese, ser emilgrana</p>
                        <p class="card-text">Cena: 25.90</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                       <img src="Photo/jedzenie/istockphoto-177413384-1024x1024.jpg" class="card-img-top" alt="Zdjecie carbonary" />
                      <div class="card-body">
                        <h5 class="card-title">Spaghetti Carbonara</h5>
                        <p class="card-text">Boczek, żółtko, ser emilgrana, śmietana, natka pietruszki, cebula, czosnek</p>
                        <p class="card-text">Cena: 27.90</p>
                      </div>
                    </div>
                </div>
            </div>
            <h3 class="title-menu">Burgery</h3>
            <div class="row row-cols-1 row-cols-md-2">
                <div class=" col">
                    <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-467416670-1024x1024.jpg" class="card-img-top" alt="Burger" />
                      <div class="card-body">
                        <h5 class="card-title">Cheeseburger</h5>
                        <p class="card-text">100% polskiej wołowiny (160 g) / podwójny ser mimolette / ogórek konserwowy / cebula / sos aioli</p>
                        <p class="card-text">Cena: 33.90</p>
                      </div>
                    </div>
                  
                </div>
                <div class="col">
                     <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-1398630614-1024x1024.jpg" class="card-img-top" alt="Burger"/>
                      <div class="card-body">
                        <h5 class="card-title">Pork & Beef Mega Burger</h5>
                        <p class="card-text">Szarpana wieprzowina (120 g) / 100% polskiej wołowiny (160 g) / ser mimholette / pomidor / ogórek konserwowy / konfitura z cebuli / sałata / majonez / ketchup</p>
                        <p class="card-text">Cena: 39.90</p>
                      </div>
                    </div>
                </div>
            </div>
            <h3 class="title-menu">Pizza</h3>
            <div class="row row-cols-1 row-cols-md-2">
                <div class=" col">
                    <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-1280329631-1024x1024.jpg" class="card-img-top" alt="PIZZA"/>
                      <div class="card-body">
                        <h5 class="card-title">Margherita</h5>
                        <p class="card-text">Sos z pomidorów pelati, mozzarella</p>
                        <p class="card-text">Cena: 22.90</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-1373129580-1024x1024.jpg" class="card-img-top" alt="PIZZA"/>
                      <div class="card-body">
                        <h5 class="card-title">Peperoni</h5>
                        <p class="card-text">Sos z pomidorów pelati, mozzarella, salami, papryczka peperoni</p>
                        <p class="card-text">Cena: 27.90</p>
                      </div>
                    </div>
                </div>

            </div>
            <h3 class="title-menu">Napoje</h3>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-957892610-1024x1024.jpg" class="card-img-top" alt="lemonida"/>
                      <div class="card-body">
                        <h5 class="card-title">Lemoniada cytrynowa</h5>
                        <p class="card-text">Słoik 400 ml</p>
                        <p class="card-text">Cena: 9.00</p>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                      <img src="Photo/jedzenie/istockphoto-957892610-1024x1024.jpg" class="card-img-top" alt="lemonida"/>
                      <div class="card-body">
                        <h5 class="card-title">Lemoniada cytrynowa</h5>
                        <p class="card-text">Karawka 1l</p>
                        <p class="card-text">Cena: 12.00</p>
                      </div>
                    </div>
                </div>
            </div>
    </div>
</asp:Content>
