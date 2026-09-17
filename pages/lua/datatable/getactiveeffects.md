<function name="GetActiveEffects" parent="Player" type="classfunc">
	<description>
		Returns the player's raw active-effects string - a comma-separated list of currently active <page>EFFECT</page> names.<br>
		Managed internally by <page>Player:AddEffect</page>/<page>Player:ClearEffect</page>/<page>Player:ClearEffects</page>; you should use those instead of reading/writing this directly.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="activeEffects" type="string">The current value, or an empty string if none are active.</ret>
	</rets>
</function>