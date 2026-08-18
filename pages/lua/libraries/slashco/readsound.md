<function name="ReadSound" parent="SlashCo" type="libraryfunc">
	<description>
		<deprecated>
			This function will be replaced by <page>SlashCo.AudioSystem</page>
		</deprecated>
		Loads and plays a sound using the specified sound file.<br>
		Sounds are cached globally so that subsequent calls using the same file can reuse the existing sound object.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="fileName" type="string">The path or name of the sound to load and play.</arg>
	</args>
	<rets>
		<ret name="sound" type="CSoundPatch">The loaded sound object, or nil if the sound could not be created.</ret>
	</rets>
</function>
