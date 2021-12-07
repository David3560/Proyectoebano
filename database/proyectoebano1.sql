-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2021 a las 18:20:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoebano1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogos`
--

CREATE TABLE `catalogos` (
  `idCatalogo` bigint(20) UNSIGNED NOT NULL,
  `categoriaCatalogo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `empleadoFK` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `catalogos`
--

INSERT INTO `catalogos` (`idCatalogo`, `categoriaCatalogo`, `empleadoFK`, `created_at`, `updated_at`) VALUES
(1, 'ppp', 1, '2021-12-07 12:18:26', '2021-12-07 12:18:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` bigint(20) UNSIGNED NOT NULL,
  `nombreCliente` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `telefonoCliente` bigint(20) NOT NULL,
  `documentoCliente` bigint(20) NOT NULL,
  `usuarioFK` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreCliente`, `telefonoCliente`, `documentoCliente`, `usuarioFK`, `created_at`, `updated_at`) VALUES
(1, 'David', 3124567894, 405, NULL, '2021-12-07 12:20:02', '2021-12-07 12:20:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorproductos`
--

CREATE TABLE `colorproductos` (
  `idColorProducto` bigint(20) UNSIGNED NOT NULL,
  `colorProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `colorproductos`
--

INSERT INTO `colorproductos` (`idColorProducto`, `colorProducto`, `created_at`, `updated_at`) VALUES
(1, 'rojo', '2021-12-07 12:17:24', '2021-12-07 12:17:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacions`
--

CREATE TABLE `cotizacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idCliente` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cotizacions`
--

INSERT INTO `cotizacions` (`id`, `created_at`, `updated_at`, `idCliente`) VALUES
(2, '2021-12-07 12:27:34', '2021-12-07 12:27:34', 1),
(3, '2021-12-07 12:27:41', '2021-12-07 12:27:41', 1),
(4, '2021-12-07 12:54:56', '2021-12-07 12:54:56', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crud`
--

CREATE TABLE `crud` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `campoPrueba` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` bigint(20) UNSIGNED NOT NULL,
  `nombreEmpleado` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `documentoEmpleado` bigint(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefonoEmpleado` bigint(20) NOT NULL,
  `usuarioFK` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `nombreEmpleado`, `documentoEmpleado`, `fechaNacimiento`, `telefonoEmpleado`, `usuarioFK`, `created_at`, `updated_at`) VALUES
(1, 'juan', 5, '2001-01-24', 1000000005, 2, '2021-12-07 12:18:18', '2021-12-07 12:18:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

CREATE TABLE `imagens` (
  `idImagen` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `nombreImagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `imageProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagens`
--

INSERT INTO `imagens` (`idImagen`, `uuid`, `nombreImagen`, `imageProducto`, `created_at`, `updated_at`) VALUES
(1, '6a64cfc5-8eb0-4483-8a46-c7e33f8ea9b4', 'fantasma', 'imagenes/1638861548_7698246d725f3332c74df33a0aa9997f.jpg', '2021-12-07 12:19:08', '2021-12-07 12:19:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materials`
--

CREATE TABLE `materials` (
  `idMaterial` bigint(20) UNSIGNED NOT NULL,
  `nombreMaterial` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionMaterial` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `costoMaterial` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `materials`
--

INSERT INTO `materials` (`idMaterial`, `nombreMaterial`, `descripcionMaterial`, `costoMaterial`, `created_at`, `updated_at`) VALUES
(1, 'madera', 'madera fina ultra', 200000.00, '2021-12-07 12:17:36', '2021-12-07 12:17:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2021_08_16_171415_create_sessions_table', 1),
(25, '2021_08_17_035757_create_imagens_table', 1),
(26, '2021_08_17_172021_create_clientes_table', 1),
(27, '2021_08_23_021745_create_empleados_table', 1),
(28, '2021_08_23_022214_create_catalogos_table', 1),
(29, '2021_08_23_045144_create_materials_table', 1),
(30, '2021_08_23_045321_create_tipoproductos_table', 1),
(31, '2021_08_23_045415_create_colorproductos_table', 1),
(32, '2021_08_31_123349_create_productos_table', 1),
(33, '2021_11_06_002630_create_permission_tables', 1),
(34, '2021_11_09_155502_create_crud_table', 1),
(35, '2021_11_30_174022_create_cotizacions_table', 1),
(36, '2021_12_05_025802_create_productos_cotizados_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'ver-usuarios', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(2, 'crear-usuarios', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(3, 'editar-usuarios', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(4, 'borrar-usuarios', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(5, 'ver-rol', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(6, 'crear-rol', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(7, 'editar-rol', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(8, 'borrar-rol', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(9, 'ver-crud', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(10, 'crear-crud', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(11, 'editar-crud', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(12, 'borrar-crud', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(13, 'ver-tipoProducto', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(14, 'crear-tipoProducto', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(15, 'editar-tipoProducto', 'web', '2021-12-07 12:16:29', '2021-12-07 12:16:29'),
(16, 'borrar-tipoProducto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(17, 'ver-colorProducto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(18, 'crear-colorProducto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(19, 'editar-colorProducto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(20, 'borrar-colorProducto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(21, 'ver-material', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(22, 'crear-material', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(23, 'editar-material', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(24, 'borrar-material', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(25, 'ver-empleado', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(26, 'crear-empleado', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(27, 'editar-empleado', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(28, 'borrar-empleado', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(29, 'ver-catalogo', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(30, 'crear-catalogo', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(31, 'editar-catalogo', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(32, 'borrar-catalogo', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(33, 'ver-producto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(34, 'crear-producto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(35, 'editar-producto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(36, 'borrar-producto', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(37, 'ver-imagen', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(38, 'crear-imagen', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(39, 'editar-imagen', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30'),
(40, 'borrar-imagen', 'web', '2021-12-07 12:16:30', '2021-12-07 12:16:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` bigint(20) UNSIGNED NOT NULL,
  `nombreProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `costoProducto` double(8,2) NOT NULL,
  `idCatalogoFK` bigint(20) UNSIGNED DEFAULT NULL,
  `idImagenFK` bigint(20) UNSIGNED DEFAULT NULL,
  `idColorProductoFK` bigint(20) UNSIGNED DEFAULT NULL,
  `idTipoProductoFK` bigint(20) UNSIGNED DEFAULT NULL,
  `idMaterialFK` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcionProducto`, `costoProducto`, `idCatalogoFK`, `idImagenFK`, `idColorProductoFK`, `idTipoProductoFK`, `idMaterialFK`, `created_at`, `updated_at`) VALUES
(1, 'doors', 'dsadsad', 40000.00, 1, 1, 1, 1, 1, '2021-12-07 12:19:24', '2021-12-07 12:19:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_cotizados`
--

CREATE TABLE `productos_cotizados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cotizacion` bigint(20) UNSIGNED DEFAULT NULL,
  `nombreProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `descripcionProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `costoProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos_cotizados`
--

INSERT INTO `productos_cotizados` (`id`, `id_cotizacion`, `nombreProducto`, `descripcionProducto`, `costoProducto`, `created_at`, `updated_at`) VALUES
(2, 2, 'doors', 'dsadsad', '40000', '2021-12-07 12:27:34', '2021-12-07 12:27:34'),
(3, 2, 'doors', 'dsadsad', '40000', '2021-12-07 12:27:34', '2021-12-07 12:27:34'),
(4, 2, 'doors', 'dsadsad', '40000', '2021-12-07 12:27:34', '2021-12-07 12:27:34'),
(5, 3, 'doors', 'dsadsad', '40000', '2021-12-07 12:27:41', '2021-12-07 12:27:41'),
(6, 4, 'doors', 'dsadsad', '40000', '2021-12-07 12:54:56', '2021-12-07 12:54:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'empleado', 'web', '2021-12-07 12:16:43', '2021-12-07 12:16:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uXcEamOWG6sJwbu7eNtjcEnc3M12W4PGEyMOOB5A', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZGJ4QjdhSWE0Zjg0dzMxNlBIbmYwUHhZSkpCRXBqMmphelBNc2x0SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9tYXRlcmlhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRQSDNkU3BzZ3dvWlBidlJDRzdwNU9lTDB5ODE4NHNGYW1OSWJ0am40ZTdiOE96N2FFVVlkZSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkUEgzZFNwc2d3b1pQYnZSQ0c3cDVPZUwweTgxODRzRmFtTklidGpuNGU3YjhPejdhRVVZZGUiO30=', 1638897571);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproductos`
--

CREATE TABLE `tipoproductos` (
  `idTipoProducto` bigint(20) UNSIGNED NOT NULL,
  `tipoProducto` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoproductos`
--

INSERT INTO `tipoproductos` (`idTipoProducto`, `tipoProducto`, `created_at`, `updated_at`) VALUES
(1, 'mesa', '2021-12-07 12:17:16', '2021-12-07 12:17:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$PH3dSpsgwoZPbvRCG7p5OeL0y8184sFamNIbtjn4e7b8Oz7aEUYde', NULL, NULL, NULL, NULL, NULL, '2021-12-07 12:15:32', '2021-12-07 12:15:32'),
(2, 'juanes', 'juanes@gmail.com', NULL, '$2y$10$j.VoQtbw7tw7PVJ/YeAUt.wGZInBE0xzJbJs9qJdFXFFCbwqiS7Ra', NULL, NULL, NULL, NULL, NULL, '2021-12-07 12:17:03', '2021-12-07 12:17:03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD PRIMARY KEY (`idCatalogo`),
  ADD UNIQUE KEY `catalogos_empleadofk_unique` (`empleadoFK`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `clientes_nombrecliente_unique` (`nombreCliente`),
  ADD UNIQUE KEY `clientes_telefonocliente_unique` (`telefonoCliente`),
  ADD UNIQUE KEY `clientes_documentocliente_unique` (`documentoCliente`),
  ADD UNIQUE KEY `clientes_usuariofk_unique` (`usuarioFK`);

--
-- Indices de la tabla `colorproductos`
--
ALTER TABLE `colorproductos`
  ADD PRIMARY KEY (`idColorProducto`);

--
-- Indices de la tabla `cotizacions`
--
ALTER TABLE `cotizacions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cotizacions_id_cliente_foreign` (`idCliente`);

--
-- Indices de la tabla `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD UNIQUE KEY `empleados_nombreempleado_unique` (`nombreEmpleado`),
  ADD UNIQUE KEY `empleados_documentoempleado_unique` (`documentoEmpleado`),
  ADD UNIQUE KEY `empleados_telefonoempleado_unique` (`telefonoEmpleado`),
  ADD UNIQUE KEY `empleados_usuariofk_unique` (`usuarioFK`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`idMaterial`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `productos_idcatalogofk_foreign` (`idCatalogoFK`),
  ADD KEY `productos_idimagenfk_foreign` (`idImagenFK`),
  ADD KEY `productos_idcolorproductofk_foreign` (`idColorProductoFK`),
  ADD KEY `productos_idtipoproductofk_foreign` (`idTipoProductoFK`),
  ADD KEY `productos_idmaterialfk_foreign` (`idMaterialFK`);

--
-- Indices de la tabla `productos_cotizados`
--
ALTER TABLE `productos_cotizados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_cotizados_id_cotizacion_foreign` (`id_cotizacion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  ADD PRIMARY KEY (`idTipoProducto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogos`
--
ALTER TABLE `catalogos`
  MODIFY `idCatalogo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colorproductos`
--
ALTER TABLE `colorproductos`
  MODIFY `idColorProducto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cotizacions`
--
ALTER TABLE `cotizacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `crud`
--
ALTER TABLE `crud`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagens`
--
ALTER TABLE `imagens`
  MODIFY `idImagen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materials`
--
ALTER TABLE `materials`
  MODIFY `idMaterial` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos_cotizados`
--
ALTER TABLE `productos_cotizados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipoproductos`
--
ALTER TABLE `tipoproductos`
  MODIFY `idTipoProducto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catalogos`
--
ALTER TABLE `catalogos`
  ADD CONSTRAINT `catalogos_empleadofk_foreign` FOREIGN KEY (`empleadoFK`) REFERENCES `empleados` (`idEmpleado`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_usuariofk_foreign` FOREIGN KEY (`usuarioFK`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacions`
--
ALTER TABLE `cotizacions`
  ADD CONSTRAINT `cotizacions_id_cliente_foreign` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_usuariofk_foreign` FOREIGN KEY (`usuarioFK`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_idcatalogofk_foreign` FOREIGN KEY (`idCatalogoFK`) REFERENCES `catalogos` (`idCatalogo`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_idcolorproductofk_foreign` FOREIGN KEY (`idColorProductoFK`) REFERENCES `colorproductos` (`idColorProducto`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_idimagenfk_foreign` FOREIGN KEY (`idImagenFK`) REFERENCES `imagens` (`idImagen`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_idmaterialfk_foreign` FOREIGN KEY (`idMaterialFK`) REFERENCES `materials` (`idMaterial`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_idtipoproductofk_foreign` FOREIGN KEY (`idTipoProductoFK`) REFERENCES `tipoproductos` (`idTipoProducto`) ON DELETE SET NULL;

--
-- Filtros para la tabla `productos_cotizados`
--
ALTER TABLE `productos_cotizados`
  ADD CONSTRAINT `productos_cotizados_id_cotizacion_foreign` FOREIGN KEY (`id_cotizacion`) REFERENCES `cotizacions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
