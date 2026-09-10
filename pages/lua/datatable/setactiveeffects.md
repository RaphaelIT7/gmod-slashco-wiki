<function name="SetActiveEffects" parent="Player" type="classfunc">
	<description>
		Sets the player's raw active-effects string directly.<br>
		Prefer <page>Player:AddEffect</page>/<page>Player:ClearEffect</page>/<page>Player:ClearEffects</page> over setting this directly.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
		<internal></internal>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="activeEffects" type="string">The value to set.</arg>
	</args>
</function>