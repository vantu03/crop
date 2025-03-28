<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cắt Ảnh Chuẩn TikTok - Tỉ lệ 9:16, 16:9, 1:2...</title>
  <meta name="description" content="Công cụ cắt ảnh nhanh chóng theo nhiều tỉ lệ phổ biến như 9:16, 16:9, 1:2, 4:5, 1:1. Tối ưu cho TikTok, Instagram, Facebook. Không cần cài đặt, miễn phí và dễ sử dụng.">
  <meta name="keywords" content="cắt ảnh, crop ảnh, chia ảnh, tỉ lệ 9:16, tỉ lệ TikTok, chia ảnh đăng TikTok, crop ảnh online, công cụ cắt ảnh">
  <meta name="author" content="Tú Dev">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .preview {
      height: 300px;
      margin-right: 10px;
    }
    .preview-container {
      display: flex;
      overflow-x: auto;
      gap: 1px;
    }
  </style>
</head>
<body class="bg-dark text-light">
  <div class="container py-4">
    <header class="mb-4 text-center">
      <h1 class="mb-3">Cắt Ảnh Đăng TikTok, Instagram, Facebook</h1>
      <p class="lead">Chia ảnh thành nhiều phần với tỉ lệ chuẩn 9:16, 16:9, 1:2, 4:5, 1:1. Xem trước ngay khi chọn ảnh.</p>
    </header>

    <section>
      <div class="mb-3">
        <input type="file" id="imageInput" multiple accept="image/*" class="form-control" aria-label="Chọn nhiều ảnh để cắt">
      </div>
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
            <option value="6">6 phần</option>
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

    <footer class="mt-5 text-center small">
      <p>&copy; 2025 - Công cụ miễn phí giúp bạn cắt ảnh nhanh chóng cho TikTok, Instagram, Facebook.</p>
    </footer>
  </div>

  <script src="script.js"></script>
</body>
</html>