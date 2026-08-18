<function name="PlayGlobalSound" parent="SlashCo" type="libraryfunc">
	<description>
		<deprecated>
			This function is soon to be replaced by the <page>SlashCo.AudioSystem</page>
		</deprecated>
		Plays a global sound
	</description>
	<realm>Server</realm>
	<args>
		<arg name="soundPath" type="string"></arg>
		<arg name="soundLevel" type="number"></arg>
		<arg name="ent" type="Entity"></arg>
		<arg name="vol" type="number"></arg>
		<arg name="permanent" type="boolean"></arg>
	</args>
</function>