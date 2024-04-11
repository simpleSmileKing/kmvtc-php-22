@echo off
chcp 65001 > nul
setlocal enabledelayedexpansion

set "input_file=studentList.txt"

for /f "tokens=1,* delims=-" %%a in ('type "%input_file%"') do (
    set "name=%%a"
    set "id=%%b"
    mkdir "!name!-!id!"
    echo 期末作业请以markdown形式提交 > "!name!-!id!\readme.md"
)

echo "学生目录和 readme.md 文件创建完成！"
pause
