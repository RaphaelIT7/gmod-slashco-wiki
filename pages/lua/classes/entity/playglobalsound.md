<function name="PlayGlobalSound" parent="Entity" type="classfunc">
	<description>
		<deprecated>
			This function is soon to be replaced by the <page>SlashCo.AudioSystem</page>
		</deprecated>
		Plays a global sound. This just calls <page>SlashCo.PlayGlobalSound</page> with ent being `this`
	</description>
	<realm>Server</realm>
	<args>
		<arg name="soundPath" type="string"></arg>
		<arg name="soundLevel" type="number"></arg>
		<arg name="vol" type="number"></arg>
		<arg name="permanent" type="boolean"></arg>
	</args>
</function>