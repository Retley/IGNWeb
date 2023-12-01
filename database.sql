CREATE TABLE restaurantes(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre NVARCHAR(128),
    descripcion TEXT,
    punt TINYINT,
    precio TINYINT,
    file_url VARCHAR(128),
    image_url VARCHAR(128),
        CONSTRAINT check_punt CHECK(punt BETWEEN 0 AND 10),
        CONSTRAINT checlk_precio CHECK(precio BETWEEN 1 AND 3)
    );

CREATE TABLE usuarios(
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    fullname NVARCHAR(128),
    email NVARCHAR(255),
    phone NVARCHAR(10),
    user VARCHAR(16),
    pass VARCHAR(24)
);

INSERT INTO
    restaurantes (
        nombre,
        descripcion,
        punt,
        precio,
        file_url,
        image_url
    )
VALUES
(
        'Ristorante Buona Tavola',
        '"Ristorante Buona Tavola" es una joya culinaria que rinde homenaje a la tradición gastronómica italiana. Con
        raíces en la región de la Toscana, nuestro restaurante combina la pasión por la cocina auténtica con
        ingredientes frescos y locales. Nuestra carta presenta una amplia variedad de pastas frescas hechas a mano,
        desde ravioles rellenos de ricotta y espinacas hasta tagliatelle con salsa de trufa. Nuestro horno de leña
        produce las pizzas más deliciosas, con una base fina y crujiente y una selección de ingredientes de alta
        calidad. El "Ristorante Buona Tavola" es un lugar donde la comida, el vino y la hospitalidad italiana se
        fusionan para crear una experiencia verdaderamente inolvidable.',
        10,
        3,
        'views/menu-ita.php',
        'static/shrimps.jpg'
    );

INSERT INTO
    restaurantes (
        nombre,
        descripcion,
        punt,
        precio,
        file_url,
        image_url
    )
VALUES
(
        'Sakura Sushi & Grill',
        'En "Sakura Sushi & Grill", te invitamos a explorar la riqueza de la cocina japonesa en un ambiente elegante y
          acogedor. Nuestra carta presenta una amplia gama de opciones, desde sushi y sashimi frescos hasta platos de
          teppanyaki preparados con destreza frente a tus ojos. Cada bocado es una obra de arte, preparada con los
          ingredientes más frescos y auténticos. Disfruta de la serenidad de nuestra decoración japonesa mientras
          saboreas sabores exquisitos que te transportarán a las calles de Tokio.
        ',
        9,
        2,
        'views/menu-jap.php',
        'static/sushi.jpg'
    );

INSERT INTO
    restaurantes (
        nombre,
        descripcion,
        punt,
        precio,
        file_url,
        image_url
    )
VALUES
(
        'La Casa del Sabor Mexicano',
        '"La Casa del Sabor Mexicano" es un rincón de México en el corazón de la ciudad. Aquí, celebramos la rica
          tradición de la comida mexicana con una explosión de sabores y colores. Nuestra carta es un viaje culinario
          que incluye platos icónicos como tacos al pastor, enchiladas suizas, guacamole fresco y margaritas
          artesanales. Cada plato es una representación auténtica de la diversidad y la pasión de la cocina mexicana. En
          "La Casa del Sabor Mexicano", la comida es una fiesta y nuestros comensales son nuestros invitados de honor.
        ',
        10,
        1,
        'views/menu-mex.php',
        'static/burritos.jpg'
    );

INSERT INTO
    restaurantes (
        nombre,
        descripcion,
        punt,
        precio,
        file_url,
        image_url
    )
VALUES
(
        'Bocado Express',
        '"Bocado Express" es tu destino para satisfacer tus antojos con comidas rápidas y deliciosas. Nuestro menú
          ofrece una amplia variedad de opciones tentadoras, desde nuestras hamburguesas jugosas y papas fritas
          crujientes hasta nuestros famosos aros de cebolla y pollo frito irresistible. Utilizamos ingredientes frescos
          y de alta calidad para garantizar que cada bocado sea una experiencia deliciosa. Ya sea para llevar o para
          disfrutar en nuestro acogedor comedor, "Bocado Express" te ofrece la comodidad y el sabor que anhelas.
        ',
        8,
        1,
        'views/menu-boc.php',
        'static/hotdog.jpg'
    );

INSERT INTO
    restaurantes (
        nombre,
        descripcion,
        punt,
        precio,
        file_url,
        image_url
    )
VALUES
(
        'Mariscos del Mar Azul',
        'En "Mariscos del Mar Azul", nos enorgullece ofrecer una experiencia culinaria en el océano. Nuestro
          restaurante es un santuario para los amantes de los mariscos, donde la frescura y la calidad son nuestras
          principales prioridades. Desde pescado a la parrilla con una selección de salsas únicas hasta camarones a la
          mantequilla de ajo y cangrejo relleno, cada plato es una obra maestra del sabor marino. Sumérgete en nuestra
          selección de vinos y disfruta de la brisa del océano en nuestro comedor con vista al mar. En "Mariscos del Mar
          Azul", te invitamos a explorar el mundo de los sabores del mar.
        ',
        6,
        3,
        'views/menu-mar.php',
        'static/shrimps.jpg'
    );
