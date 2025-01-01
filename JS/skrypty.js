setInterval(() => {
  const textBlocks = document.querySelectorAll(".text-block");
  textBlocks.forEach((block) => {
    block.innerHTML = block.innerHTML;
  });
}, 10000); // 10000 ms = 10 sekund
