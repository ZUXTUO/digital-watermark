@echo off
pyinstaller --onefile --add-data "wm;wm" --add-data "ui;ui" --hidden-import=PIL.ImageFont --hidden-import=PIL.ImageDraw --hidden-import=numpy --hidden-import=scipy --hidden-import=scipy.fftpack --hidden-import=pywt main.py
pause