<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cắt Ảnh Chuẩn TikTok - Chia Ảnh Đẹp Theo Tỉ Lệ 9:16, 16:9, 1:2...</title>
  <meta name="description" content="Công cụ cắt ảnh online nhanh chóng, dễ sử dụng. Chia ảnh thành nhiều phần theo tỉ lệ 9:16, 16:9, 1:1, 1:2, 4:5. Tối ưu đăng TikTok, Instagram, Facebook. Hỗ trợ preview trực tiếp và tải nhanh.">
  <meta name="keywords" content="cắt ảnh, crop ảnh, chia ảnh, tỉ lệ 9:16, tỉ lệ TikTok, chia ảnh đăng TikTok, crop ảnh online, công cụ cắt ảnh, chia ảnh đẹp, ảnh carousel, TikTok grid">
  <meta name="author" content="Tú Dev">
  <meta property="og:title" content="Cắt Ảnh TikTok - Chia Ảnh Đẹp Theo Tỉ Lệ Chuẩn">
  <meta property="og:description" content="Công cụ online giúp bạn cắt ảnh nhanh, chia nhiều phần theo tỉ lệ chuẩn TikTok, Instagram, Facebook. Không cần cài đặt, miễn phí.">
  <meta property="og:image" content="demo1.gif">
  <meta property="og:url" content="https://sv.pro.vn/crop">
  <meta name="theme-color" content="#000000">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #121212;
      color: #f8f9fa;
    }
    .preview {
      height: 70vh;
    }
    .preview-container {
      display: flex;
      justify-content: center;
      gap: 1px;
      overflow-x: auto;
    }
    header h1 {
      color: #00ffe0;
    }
    footer {
      color: #999;
    }
    .custom-file-label {
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .custom-file-label:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container py-4">
    <header class="mb-4 text-center">
      <h1 class="mb-3">Cắt Ảnh TikTok - Chia Ảnh Đẹp Theo Tỉ Lệ</h1>
      <p class="lead">Công cụ miễn phí giúp bạn chia ảnh thành nhiều phần theo tỉ lệ chuẩn như 9:16, 16:9, 1:2, 4:5, 1:1. Tối ưu cho TikTok, Instagram, Facebook.</p>
    </header>

    <section class="text-center mb-4">
      <p class="mb-2">🎯 Công cụ được hàng nghìn người dùng để chia ảnh đăng TikTok, Instagram:</p>
      <img src="demo1.gif" alt="Demo cắt ảnh TikTok" class="img-fluid rounded shadow" style="max-height: 500px;">
    </section>

    <section class="mb-4 text-center">
      <label for="imageInput" class="btn btn-outline-light custom-file-label mb-3">
        <i class="bi bi-image"></i> Chọn ảnh từ thiết bị
      </label>
      <input type="file" id="imageInput" multiple accept="image/*" class="d-none" aria-label="Chọn nhiều ảnh để cắt">

      <div class="row mb-3">
        <div class="col">
          <label class="form-label">Tỉ lệ khung hình:</label>
          <select id="aspectRatio" class="form-select">
            <option value="4:5">4:5</option>
            <option value="1:2">1:2</option>
            <option value="1:1">1:1</option>
            <option value="9:16">9:16</option>
            <option value="16:9">16:9</option>
          </select>
        </div>
        <div class="col">
          <label class="form-label">Số phần muốn cắt:</label>
          <select id="splitCount" class="form-select">
            <option value="2">2 phần</option>
            <option value="3">3 phần</option>
            <option value="4">4 phần</option>
            <option value="5">5 phần</option>
            <option value="6">6 phần</option>
            <option value="7">7 phần</option>
            <option value="8">8 phần</option>
            <option value="9">9 phần</option>
          </select>
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label">Điều chỉnh vị trí cắt dọc:</label>
        <input type="range" class="form-range" id="cropSlider" min="0" max="100" value="50">
      </div>
    </section>

    <section id="previewContainer" class="preview-container mb-4"></section>

    <section class="mb-4">
      <h2 class="h5">📌 Hướng dẫn sử dụng</h2>
      <ul>
        <li><strong>Bước 1:</strong> Chọn nhiều ảnh cần cắt bằng nút "Chọn ảnh từ thiết bị".</li>
        <li><strong>Bước 2:</strong> Chọn tỉ lệ khung hình phù hợp.</li>
        <li><strong>Bước 3:</strong> Chọn số phần muốn chia.</li>
        <li><strong>Bước 4:</strong> Điều chỉnh vị trí cắt dọc nếu cần.</li>
        <li><strong>Bước 5:</strong> Xem trước và tải từng ảnh đã cắt.</li>
      </ul>
    </section>

    <footer class="mt-5 text-center small">
      <p>&copy; 2025 - <strong>Tú Dev</strong>. Công cụ chia ảnh chuẩn TikTok, Instagram, Facebook. Dễ sử dụng, miễn phí và không cần cài đặt.</p>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>