class ImageCropper {
  constructor(file, aspectRatio, splitCount, verticalOffset) {
    this.file = file;
    this.aspectRatio = aspectRatio;
    this.splitCount = splitCount;
    this.verticalOffset = verticalOffset; // giá trị từ 0 -> 100
  }

  async process() {
    return new Promise((resolve) => {
      const img = new Image();
      img.onload = () => {
        const [aw, ah] = this.aspectRatio.split(":").map(Number);
        const targetAspect = aw / ah;

        let cropWidth = img.width;
        let cropHeight = cropWidth / (targetAspect * this.splitCount);

        if (cropHeight > img.height) {
          cropHeight = img.height;
          cropWidth = cropHeight * targetAspect * this.splitCount;
        }

        const startX = (img.width - cropWidth) / 2;
        // Tính vị trí crop dọc theo slider
        const maxY = img.height - cropHeight;
        const startY = (maxY * this.verticalOffset) / 100;

        const results = [];
        const partWidth = cropWidth / this.splitCount;
        const partHeight = cropHeight;

        for (let i = 0; i < this.splitCount; i++) {
          const canvas = document.createElement("canvas");
          canvas.width = partWidth;
          canvas.height = partHeight;
          const ctx = canvas.getContext("2d");

          ctx.drawImage(
            img,
            startX + i * partWidth,
            startY,
            partWidth,
            partHeight,
            0,
            0,
            partWidth,
            partHeight
          );

          canvas.toBlob((blob) => {
            results.push({ index: i + 1, blob });
            if (results.length === this.splitCount) {
              resolve(results);
            }
          }, "image/jpeg", 0.95);
        }
      };
      img.src = URL.createObjectURL(this.file);
    });
  }
}

async function processAll() {
  const files = document.getElementById("imageInput").files;
  const aspect = document.getElementById("aspectRatio").value;
  const splitCount = parseInt(document.getElementById("splitCount").value);
  const verticalOffset = parseInt(document.getElementById("cropSlider").value);
  const container = document.getElementById("previewContainer");
  container.innerHTML = "";

  for (let file of files) {
    const cropper = new ImageCropper(file, aspect, splitCount, verticalOffset);
    const parts = await cropper.process();

    parts.forEach((part) => {
      const url = URL.createObjectURL(part.blob);

      // Tạo phần tử img
      const img = document.createElement("img");
      img.src = url;
      img.className = "preview d-block";

      // Tạo nút tải
      const btn = document.createElement("a");
      btn.href = url;
      btn.download = `${file.name.replace(/\.[^/.]+$/, '')}_${part.index}.jpg`;
      btn.className = "btn btn-sm btn-primary mt-1";
      btn.textContent = `Tải xuống`;

      // Tạo container nhỏ
      const div = document.createElement("div");
      div.className = "d-inline-block text-center";
      div.appendChild(img);
      div.appendChild(btn);

      container.appendChild(div);
    });
  }
}

document.getElementById("imageInput").addEventListener("change", processAll);
document.getElementById("aspectRatio").addEventListener("change", processAll);
document.getElementById("splitCount").addEventListener("change", processAll);
document.getElementById("cropSlider").addEventListener("change", processAll);
