
document.addEventListener("DOMContentLoaded", () => {
  const tarjetas = document.querySelectorAll(".tarjeta");

  tarjetas.forEach(tarjeta => {
    tarjeta.addEventListener("click", (e) => {
      e.preventDefault(); // Evita el comportamiento por defecto del enlace

      // Obtenemos los datos del platillo
      const nombre = tarjeta.querySelector("h2").innerText;
      const imagen = tarjeta.querySelector("img").getAttribute("src");

      // Descripciones predefinidas
    const descripciones = {
        //Arroz y pescado
        "Sushi 寿司": "Arroz avinagrado con pescado crudo (como salmón o atún), mariscos o vegetales, envuelto o no en alga nori.",
        "Sashimi 刺身": "Láminas delgadas de pescado o marisco crudo, servidas con salsa de soja, wasabi y jengibre encurtido.",
        "Nigiri 握り寿司": "Bola de arroz moldeada a mano con una pieza de pescado o marisco encima.",
        "Maki 巻き寿司": "Rollos de arroz y pescado o vegetales envueltos en alga nori y cortados en piezas.",
        "Chirashi ちらし寿司": "Tazón de arroz avinagrado cubierto con diferentes tipos de sashimi y acompañamientos.",
        "Temaki 手巻き": "Cono de alga nori relleno con arroz, pescado, mariscos o vegetales, enrollado a mano.",

        //Fideos
        "Ramen ラーメン": "Fideos de trigo servidos en un caldo sabroso, con toppings como cerdo, huevo cocido, algas y cebollín.",
        "Udon うどん": "Fideos gruesos de trigo servidos en caldo caliente o frío con tempura, carne o cebollines.",
        "Soba そば": "Fideos finos hechos de trigo sarraceno, servidos fríos con salsa tsuyu o en caldo caliente.",
        "Yakisoba 焼きそば": "Fideos fritos salteados con carne, verduras y salsa yakisoba dulce-salada.",

        //Arroz sin sushi
        "Donburi 丼ぶり": "Tazón de arroz cubierto con ingredientes como carne, huevo, pollo o pescado.",
        "Katsudon カツ丼": "Tazón de arroz cubierto con chuleta de cerdo empanizada, huevo y cebolla cocidos en salsa dulce.",
        "Onigiri おにぎり": "Bolas o triángulos de arroz rellenos (como salmón o umeboshi) y envueltos en alga nori.",
        "Omurice オムライス": "Arroz frito envuelto en una tortilla de huevo y cubierto con salsa de tomate o demi-glace.",
        "Curry japonés カレーライス": "Plato de arroz acompañado de un curry espeso con carne, papas, zanahorias y cebolla.",

        //Parrilla o fritos
        "Yakitori 焼き鳥": "Brochetas de pollo asadas a la parrilla y bañadas en salsa tare o saladas al gusto.",
        "Tonkatsu とんかつ": "Chuleta de cerdo empanizada y frita, servida con col rallada y salsa tonkatsu.",
        "Tempura 天ぷら": "Verduras o mariscos rebozados en masa ligera y fritos en aceite caliente hasta quedar crujientes.",
        "Karaage 唐揚げ": "Trozos de pollo marinados en soja y jengibre, empanizados ligeramente y fritos.",
        "Takoyaki たこ焼き": "Bolas de masa rellenas de pulpo, cocidas en plancha especial y cubiertas con salsa, mayonesa y bonito seco.",

        //Guisos y sopas
        "Sukiyaki すき焼き": "Guiso de carne de res, tofu, verduras y fideos cocidos en caldo dulce de soja y mirin.",
        "Shabu-shabu しゃぶしゃぶ": "Carne de res y verduras finas cocidas rápidamente en agua caliente y bañadas en salsas ponzu o goma.",
        "Miso soup 味噌汁": "Sopa tradicional de caldo dashi con pasta de miso, tofu, algas y cebolla verde.",
        "Nabe 鍋": "Guiso caliente servido en olla, con carne, mariscos, tofu y verduras cocidos juntos en la mesa.",
        "Oden おでん": "Plato de invierno con huevo, rábanos, tofu y otros ingredientes cocidos en caldo dashi sabroso.",

        //Snacks y callejeros
        "Okonomiyaki お好み焼き": "Panqueque japonés salado con col, carne o mariscos, cubierto con salsas y mayonesa.",
        "Taiyaki たい焼き": "Pastel con forma de pez relleno tradicionalmente de anko (pasta dulce de frijol rojo).",
        "Dorayaki どら焼き": "Dos panqueques rellenos con pasta dulce de frijol rojo, muy popular como postre.",
        "Dango 団子": "Brochetas de bolitas de arroz glutinoso, a veces cubiertas con salsa dulce o tostadas.",
        "Yaki onigiri 焼きおにぎり": "Bolas de arroz asadas a la parrilla, cubiertas con salsa de soja o miso para darles un sabor ahumado."
    };

      const descripcion = descripciones[nombre] || "Descripción no disponible.";

      // Guardamos los datos en localStorage
      localStorage.setItem("platilloSeleccionado", JSON.stringify({
        nombre: nombre,
        imagen: imagen,
        descripcion: descripcion
      }));

      // Redirigimos a comida.html
      window.location.href = "comida.php?platillo=" + nombre;
    });
  });
});