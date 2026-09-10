<function name="GetExperience" parent="Player" type="classfunc">
	<description>
		Returns the player's total experience points, used by <page>SlashCo.ExperienceToLevel</page> to compute their level.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="experience" type="number" default="0">The current value.</ret>
	</rets>
</function>