import pyautogui
import time

def unleash_hell():
    while True:
        if pyautogui.mouseIsPressed(button='left'):
            pyautogui.click(button='right')
        time.sleep(0.01)  # Adjust this shit to control the click rate, dumbass

unleash_hell()
