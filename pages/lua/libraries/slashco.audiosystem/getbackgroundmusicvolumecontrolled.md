<function name="GetBackgroundMusicVolumeControlled" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Returns the current volume of the background music but unlike <page>SlashCo.AudioSystem.GetBackgroundMusicVolume</page> this function will respect the ConVar value of `snd_musicvolume` (The GMod Settings Music volume slider) while being in the Lobby.<br>
		In a round it will return the same volume as <page>SlashCo.AudioSystem.GetBackgroundMusicVolume</page>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="fallback" type="number" default="1">The fallback volme to return if there currently is none</arg>
	</args>
	<rets>
		<ret name="volume" type="number"></ret>
	</rets>
</function>