<function name="ToSound" parent="SlashCo.AudioSystem" type="libraryfunc">
	<description>
		Adds `sound/` to the start of the sound if it doesn't already have this.<br>
		This is needed as else a sound may not be found since paths are relative to the `garrysmod/` folder, **NOT** relative to the `sound/` folder.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="soundFile" type="string">Input soundFile which may be missing `sound/`</arg>
	</args>
	<rets>
		<ret name="soundFile" type="string">Output soundFile which will always start with `sound/`</ret>
	</rets>
</function>